<?php

namespace core\base;

use core\Db;
use Valitron\Validator as V;

class Model {
  
  protected $db;
  protected $table;
  protected $primaryKey = 'id';
  public $attributes = [];
  public $errors = [];
  public $rules = [];
  
  public function __construct() {
    $this->db = Db::instance();
  }

  public function load($data) {
    foreach ($this->attributes as $name => $value) {
      if (isset($data[$name])) {
        $this->attributes[$name] = $data[$name];
      }
    }
  }

  public function save($table = null) {
    $table = $table ?? $this->table;
    $propetries = implode(", ", array_keys($this->attributes));
    $questions = preg_replace( '#[^,]+#', '?', $propetries);
    
    $sql = "INSERT INTO $table (" . $propetries . ") VALUES (" . $questions . ")";
    $saved = $this->db->execute($sql, array_values($this->attributes));

    return $saved;
  }

  public function validate($data) {
    V::lang('ru');
    $v = new V($data);
    $v->rules($this->rules);

    if ($v->validate()) {
      return true;
    }

    $this->errors = $v->errors();

    return false;
  }

  public function getErrors() {
    $errors = '<ul>';

    foreach ($this->errors as $error) {
      foreach ($error as $item) {
        $errors .= "<li>$item</li>";
      }
    }
    $errors .= '</ul>';

    $_SESSION['errors'] = $errors;
  }

  public function query($sql) {
    return $this->db->execute($sql);
  }

  public function findAll() {
    $sql = "SELECT * FROM {$this->table}";

    return $this->db->query($sql);
  }

  public function findOne($id, $field = '') {
    $field = $field ?: $this->primaryKey;
    $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";

    return $this->db->query($sql, [$id]);
  }

  public function findBySql($sql, $params = []) {
    return $this->db->query($sql, $params);
  }

  public function findLike($str, $field, $table = '') {
    $table = $table ?: $this->table;
    $sql = "SELECT * FROM $table WHERE $field LIKE ?";

    return $this->db->query($sql, ['%' . $str . '%']);
  }
}
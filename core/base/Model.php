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

  public function validate($data) {
    $v = new V($data);
    $v->rules($this->rules);

    if ($v->validate()) {
      return true;
    }

    $this->error = $v->errors();

    return false;
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
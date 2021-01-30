<?php

namespace core\base;

use core\Db;

abstract class Model {
  
  protected $db;
  protected $table;
  protected $primaryKey = 'id';
  
  public function __construct() {
    $this->db = Db::instance();
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
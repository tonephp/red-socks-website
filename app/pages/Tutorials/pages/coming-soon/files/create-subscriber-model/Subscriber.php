<?php

namespace app\models;

use core\base\Model;

class Subscriber extends Model {

  public $table = 'subscriber';

  public function addNew($email) {

    $sql = "INSERT INTO $this->table (email) VALUES (?)";
    $insertId = $this->db->execute($sql, array_values([$email]));
    
    return $insertId;
  }
}
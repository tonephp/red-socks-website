<?php

namespace app\models\admin;

use core\base\Model;

class Translate extends Model {

  public $table = 'translate';

  public $attributes = [
    'alias' => '',
    'lang_alias' => '',
    'value' => '',
  ];
  
  public $rules = [
    'required' => [
      ['alias'],
      ['lang_alias'],
      ['value'],
    ],
  ];

  public function update() {
    $id = trim($_POST['id']) ?? null;
    $value = trim($_POST['value']) ?? null;

    if ($id && $value) {

      debug('sdfsdf');

      $sql = "
        UPDATE $this->table 
        SET value = ?
        WHERE id = ?
      ";

      $saved = $this->db->execute($sql, array_values([$value, $id]));

      return true;
    }

    return false;
  }
}
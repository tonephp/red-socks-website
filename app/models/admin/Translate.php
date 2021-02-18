<?php

namespace app\models\admin;

use core\base\Model;
use core\Tone;

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

  public function checkExists() {
    $lang_alias = trim($_POST['lang_alias']) ?? null;
    $alias = trim($_POST['alias']) ?? null;

    if ($lang_alias && $alias) {
      $sql = "
        SELECT * FROM $this->table 
        WHERE lang_alias = ?
        AND alias = ?
      ";

      $items = $this->db->query($sql, [$lang_alias, $alias]);
      
      if (count($items)) {
        return true;
      }
    }

    return false;
  }

  public function add() {
    $lang_alias = trim($_POST['lang_alias']) ?? null;
    $alias = trim($_POST['alias']) ?? null;
    $value = trim($_POST['value']) ?? null;

    $langs = Tone::$app->getProperty('langs');

    if ($lang_alias && $alias && $value) {

      foreach ($langs as $key => $_) {

        $sql = "INSERT INTO $this->table (lang_alias, alias, value) VALUES (?,?,?)";

        if ($key == $lang_alias) {
          $saved = $this->db->execute($sql, array_values([$lang_alias, $alias, $value]));
        } else {
          $saved = $this->db->execute($sql, array_values([$key, $alias, '']));
        }
      }

      return true;
    }

    return false;
  }
}
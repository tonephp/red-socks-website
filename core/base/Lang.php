<?php

namespace core\base;

use core\Tone;

class Lang {

  public static $data = [];
  public static $layout = [];
  public static $view = [];
  public static $cacheKey = 'translate';
  public static $cacheTime = 3600;

  public static function load($code) {
    self::$cacheKey .= $code;

    $cache = Tone::$app->cache;
    $data = $cache->get(self::$cacheKey);

    if (!$data) {
      
      $model = new Model;

      $sql = "
        SELECT * FROM translate
        WHERE lang_alias = '" . $code . "'
      ";
  
      $res = $model->findBySql($sql);
  
      $data = [];
  
      foreach ($res as $item) {
        $data[$item['alias']] = $item['value'];
      }

      $cache->set(self::$cacheKey, $data, self::$cacheTime);
    }

    self::$data = $data;
  }

  public static function get($key = 'default') {
    return isset(self::$data[$key]) ? self::$data[$key] : $key;
  }
}
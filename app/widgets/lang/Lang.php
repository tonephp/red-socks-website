<?php

namespace app\widgets\lang;

use core\base\Widget;
use core\base\Model;
use core\Tone;

class Lang extends Widget {

  protected $template;
  protected $langs;
  protected $lang;

  public function __construct($options = []) {
    $this->template = __DIR__ . '/templates/lang.php';
    $this->getOptions($options);
    $this->run();
  }

  public function run() {
    $this->langs = Tone::$app->getProperty('langs');
    $this->lang = Tone::$app->getProperty('lang');
    
    echo $this->getHtml();
  }

  public static function getLangs() {
    $model = new Model();
    
    $langs = $model->findBySql("SELECT * FROM lang ORDER BY base DESC");
    $langs = $model->convertToAssoc($langs, 'code');

    return $langs;
  }

  public static function getLang($langs) {
    
    if (isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $langs)) {
      $key = $_COOKIE['lang'];
    } else {
      $key = key($langs);
    }

    $lang = $langs[$key];
    $lang['code'] = $key;
    
    return $lang;
  }

  public function getHtml() {
    ob_start();

    require $this->template;

    return ob_get_clean();
  }
}
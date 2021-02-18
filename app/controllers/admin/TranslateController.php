<?php

namespace app\controllers\admin;

use core\base\View;
use core\base\Model;

use core\Tone;

use app\models\admin\Translate;

class TranslateController extends AdminController {

  public $cacheKey = 'translate';
  public $appLang;
  public $appLangs;

  public function __construct($route) {
    parent::__construct($route);

    $this->appLang = Tone::$app->getProperty('lang');
    $this->appLangs = Tone::$app->getProperty('langs');
  }

  public function addAction() {

    if (isset($this->route['alias'])) {
      $lang = $this->route['alias'];
    } else {
      redirect("/admin/translate/add/{$this->appLang['code']}");
    }

    if (!empty($_POST)) {
      $model = new Translate();

      if (!$model->checkExists()) {
        $model->add();

        $this->cacheKey .= $lang;
      
        $cache = Tone::$app->cache;
        $cache->delete($this->cacheKey);
      } else {
        $_SESSION['errors'] = "Этот перевод уже существует";
      }

      redirect();
    }
    
    $langs = $this->appLangs;

    $tabsList = [];

    foreach ($this->appLangs as $langItem) {
      array_push($tabsList, [
        "href" => "/admin/translate/add/" . $langItem['alias'],
        "title" => $langItem['alias'],
        "active" => $langItem['alias'] == $lang
      ]);
    }

    $this->set(compact('lang', 'tabsList'));
  }

  public function editAction() {
    $model = new Translate();
    
    $langs = array_keys($this->appLangs);

    if (isset($this->route['alias'])) {
      $lang = $this->route['alias'];
    } else {
      redirect("/admin/translate/edit/{$this->appLang['code']}");
    }

    $this->cacheKey .= $lang;

    if (!empty($_POST)) {
      
      $model->update();

      $cache = Tone::$app->cache;
      $cache->delete($this->cacheKey);

      redirect();
    }

    $sql = "SELECT * FROM translate WHERE lang_alias = ?";

    $items = $model->findBySql($sql, [$lang]);

    View::setMeta(
      "Admin panel | TonePHP Framework",
      "TonePHP Framework admin panel - main page",
      "TonePHP, Tone PHP, tone php, tonephp framework, admin page"
    );

    $tabsList = [];

    foreach ($this->appLangs as $langItem) {
      array_push($tabsList, [
        "href" => "/admin/translate/edit/" . $langItem['alias'],
        "title" => $langItem['alias'],
        "active" => $langItem['alias'] == $lang
      ]);
    }

    $this->set(compact('items', 'lang', 'tabsList'));
  }
}
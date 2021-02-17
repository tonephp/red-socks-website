<?php

namespace app\controllers\admin;

use core\base\View;
use core\base\Model;

use core\Tone;

use app\models\admin\Translate;

class TranslateController extends AdminController {

  public $cacheKey = 'translate';

  public function indexAction() {
    $langs = ['en', 'ua', 'ru'];

    if (isset($this->route['lang'])) {
      $lang = $this->route['lang'];
    } else {
      redirect('/admin/translate/en');
    }

    $this->cacheKey .= $lang;

    if (!empty($_POST)) {
      $model = new Translate();
      $model->update();

      $cache = Tone::$app->cache;
      $cache->delete($this->cacheKey);

      redirect();
    }

    $model = new Model;

    $sql = "SELECT * FROM translate WHERE lang_alias = ?";

    $items = $model->findBySql($sql, [$lang]);

    View::setMeta(
      "Admin panel | TonePHP Framework",
      "TonePHP Framework admin panel - main page",
      "TonePHP, Tone PHP, tone php, tonephp framework, admin page"
    );

    $this->set(compact('items', 'lang', 'langs'));
  }
}
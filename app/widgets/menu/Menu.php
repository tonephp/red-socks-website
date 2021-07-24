<?php

namespace app\widgets\menu;

use core\base\Model;
use core\Tone;

class Menu {

  protected $data;
  protected $tree;
  protected $menuHtml;
  protected $template;
  protected $table = 'menuitems';
  protected $cache = 3600;
  protected $cacheKey = 'menu';

  public function __construct($options = []) {
    $this->template = __DIR__ . '/templates/menu.php';
    $this->getOptions($options);

    $this->cacheKey = $this->cacheKey;

    $this->run();
  }

  public function run() {
    $cache = Tone::$app->cache;
    $this->menuHtml = $cache->get($this->cacheKey);

    if (!$this->menuHtml) {
      $this->loadData();
      $this->tree = $this->getTree();
      $this->menuHtml = $this->getMenuHtml($this->tree);
      $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
    }

    echo "<ul class='w-menu'>";
      echo $this->menuHtml;
    echo "</ul>";
  }

  protected function loadData() {
    $model = new Model();
    $sql = "
      SELECT menuitems.*, menuitems_translate.value
      FROM menuitems
      LEFT JOIN menuitems_translate ON
        menuitems.alias = menuitems_translate.menuitem_alias AND
        menuitems_translate.lang_alias = 'en'
      ORDER BY position
    ";
    $categories = $model->findBySql($sql);
    $assocCategories = $this->getAssocArrayWithIds($categories);

    $this->data = $assocCategories;
  }

  protected function getAssocArrayWithIds($categories) {
    $assocCategories = [];
    
    foreach ($categories as $item) {
      
      $keys = array_keys($item);
      $id = $item['id'];

      foreach ($keys as $key => $value) {
        if ($value != 'id') {
          $assocCategories[$id][$value] = $item[$value];
        }
      }
    }

    return $assocCategories;
  }

  protected function getTree() {
    $tree = [];
    $data = $this->data;

    foreach ($data as $id => &$node) {
      if (!$node['parent']) {
        $tree[$id] = &$node;
      } else {
        $data[$node['parent']]['childs'][$id] = &$node;
      }
    }

    return $tree;
  }

  protected function getMenuHtml($tree, $tab = '', $firstIteration = true) {
    $str = '';

    foreach ($tree as $id => $item) {
      $str .= $this->categoryToTemplate($item, $tab, $id, $firstIteration);
    }

    return $str;
  }

  protected function categoryToTemplate($category, $tab = '', $id, $firstIteration) {
    ob_start();

    require $this->template;

    return ob_get_clean();
  }

  protected function getOptions($options) {
    foreach ($options as $key => $value) {
      if (property_exists($this, $key)) {
        $this->$key = $value;
      }
    }
  }
}
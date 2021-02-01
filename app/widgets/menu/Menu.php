<?php

namespace app\widgets\menu;

class Menu {

  protected $data;
  protected $tree;
  protected $menuHtml;
  protected $template;
  protected $container;
  protected $table;
  protected $cache;

  public function __construct() {
    $this->run();
  }

  public function run() {
    $model = new MenuModel();
    $categories = $model->findBySql("SELECT * FROM categories");
    $assocCategories = $this->getAssocArrayWithIds($categories);

    $this->data = $assocCategories;
    $this->tree = $this->getTree();

    debug($this->tree);
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

  protected function getMenuHtml($tree, $tab = '') {

  }

  protected function categoryToTemplate($category, $tab = '', $id) {

  }
}
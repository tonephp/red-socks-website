<?php

namespace core\base;

use Exception;

class View {

  public $route = [];
  public $view;
  public $layout;
  public static $meta = ['title' => '', 'desc' => '', 'keywords' => ''];
  protected static $exceptionCode = DEBUG ? 500 : 404;

  public function __construct($route, $layout = '', $view = '') {
    $this->route = $route;

    if ($layout === false) {
      $this->layout = false;
    } else {
      $this->layout = $layout ?: LAYOUT;
    }
    
    $this->view = $view;
  }

  public function render($vars) {
    $file_view = APP . "/pages/{$this->route['controller']}/{$this->view}.php";
    if (is_array($vars)) extract($vars);
    
    ob_start();

    if (is_file($file_view)) {
      require $file_view;
    } else {
      $url = $this->route['url'];
      throw new Exception("Page $file_view not found. URL: $url", self::$exceptionCode);
    }

    $content = ob_get_clean();

    if (false !== $this->layout) {
      $file_layout = APP . "/layouts/{$this->layout}.php";

      if (is_file($file_layout)) {
        
        require $file_layout;
      } else {
        $url = $this->route['url'];
        throw new Exception("Layout $file_layout not found. URL: $url", self::$exceptionCode);
      }
    }
  }

  public static function getMeta() {
    echo '<title>' . self::$meta['title'] . '</title>
      <meta name="description" content="' . self::$meta['desc'] . '">
      <meta name="keywords" content="' . self::$meta['keywords'] . '">';
  }

  public static function setMeta($title = '', $desc = '', $keywords = '') {
    self::$meta['title'] = $title;
    self::$meta['desc'] = $desc;
    self::$meta['keywords'] = $keywords;
  }

  public static function loadView($name, $vars = []) {
    $filePath = APP . "/{$name}.php";

    if (!is_file($filePath)) {
      throw new Exception("View $name not found", 404);
    }

    ob_start();
    extract($vars);
    require APP . "/{$name}.php";
    
    return ob_get_clean();
  }

  public function component($name, $vars = []) {
    extract($vars);
    require APP . "/components/{$name}/{$name}.php";
  }
}
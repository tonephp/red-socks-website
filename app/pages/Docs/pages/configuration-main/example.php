<?php

namespace app\widgets\example;

use core\Tone;

class Example {
  protected $example;
  protected $cache = 3600;
  protected $cacheKey = 'example';

  public function __construct() {
    $this->cacheKey = $this->cacheKey;
    $this->example = "Default example";
    
    $this->run();
  }

  public function run() {
    $cache = Tone::$app->cache;
    $this->example = $cache->get($this->cacheKey);

    if (!$this->example) {
      $cache->set($this->cacheKey, $this->example, $this->cache);
    }
  }
}
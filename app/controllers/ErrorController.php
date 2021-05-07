<?php

namespace app\controllers;

class ErrorController extends AppController {
    
    public function indexAction() {
      $this->setMeta('Page not found');
    }
}
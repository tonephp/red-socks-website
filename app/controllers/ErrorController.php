<?php

namespace app\controllers;

class ErrorControllerr extends AppController {
    
    public function indexAction() {
      $this->setMeta('Page not found');
    }
}
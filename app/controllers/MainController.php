<?php

namespace app\controllers;

use core\base\View;
use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           __('page_title')
       );
       
       $lang = Tone::$app->getProperty('lang');
    }
}
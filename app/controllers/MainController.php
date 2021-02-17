<?php

namespace app\controllers;

use core\base\View;
use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       View::setMeta(
           __('title')
       );
       
       $lang = Tone::$app->getProperty('lang');
    }
}
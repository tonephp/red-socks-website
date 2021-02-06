<?php

namespace app\controllers;

use core\base\View;
use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       View::setMeta(
           "Main page | TonePHP Framework",
           "TonePHP Framework demo page",
           "TonePHP, Tone PHP, tone php, tonephp framework"
       );
       
       $lang = Tone::$app->getProperty('lang');
    }
}
<?php

namespace app\controllers;

use core\base\View;

class MainController extends AppController {
    
    public function indexAction() {

       View::setMeta(
           "Main page | TonePHP Framework",
           "TonePHP Framework demo page",
           "TonePHP, Tone PHP, tone php, tonephp framework"
       );
    }
}
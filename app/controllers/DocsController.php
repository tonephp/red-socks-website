<?php

namespace app\controllers;

use core\base\View;

class DocsController extends AppController {
    
    public function indexAction() {

       View::setMeta(
           "Docs | TonePHP Framework"
       );
    }
}
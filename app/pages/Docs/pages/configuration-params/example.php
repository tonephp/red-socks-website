<?php

namespace app\controllers;

use core\Tone;

class ExampleController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'TonePHP Framework',
           'TonePHP, framework'
       );
    }
}
<?php

namespace app\controllers;

use core\base\View;

class ContactsController extends AppController {
    
    public function indexAction() {

       $this->setMeta(
           "Contacts page | TonePHP Framework"
       );
    }
}
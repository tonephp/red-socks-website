<?php

namespace app\controllers;

use core\base\View;

class ContactsController extends AppController {
    
    public function indexAction() {

       View::setMeta(
           "Contacts page | TonePHP Framework"
       );
    }
}
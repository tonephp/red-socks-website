<?php

namespace app\controllers;

class TutorialsController extends AppController {
    
    public function indexAction() {

       $this->setMeta(
           "Tutorials"
       );
    }
}
<?php

namespace app\controllers;

class TutorialsController extends AppController {
    
    public function indexAction() {

       $this->setMeta(
           "Tutorials"
       );
    }

    public function tutorialAction() {
        $alias = $this->route['alias'];

        $this->setMeta(
            "Tutorial - $alias"
        );

        $this->set(compact('alias'));
     }
}
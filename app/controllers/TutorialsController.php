<?php

namespace app\controllers;

class TutorialsController extends AppController {
    
    public function indexAction() {

       $this->setMeta(
           "Tutorials"
       );
    }

    public function tutorialAction() {
        $alias = $this->route['alias'] ?? null;
        $section = $this->route['section'] ?? null;

        if (!$section) {

            if ($alias == 'coming-soon') {
                redirect("/tutorials/$alias/installation");
            }
            if ($alias == 'pick-colors') {
                redirect("/tutorials/$alias/video-link");
            }
            
        }

        $this->setMeta(
            "Tutorial - $alias - $section"
        );

        $this->set(compact('alias', 'section'));
     }
}
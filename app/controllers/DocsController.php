<?php

namespace app\controllers;

use core\base\View;

class DocsController extends AppController {
    
    public function indexAction() {

       $this->setMeta(
           __('docs_page_title') . " | TonePHP Framework"
       );

       $alias = $this->route['alias'] ?? 'get-started';

       $docContent = $this->loadView("pages/Docs/pages/{$alias}");

       $this->set(compact('docContent'));
    }
}
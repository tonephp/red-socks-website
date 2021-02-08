<?php

namespace app\controllers;

use core\Tone;

class LangController extends AppController {
    
    public function changeAction() {
        $lang = $_GET['lang'] ?? null;
        
        if ($lang) {
            $langs = Tone::$app->getProperty('langs');

            if (array_key_exists($lang, $langs)) {
                setcookie('lang', $lang, time() + 3600*24*7, '/');
            }
        }

        redirect();
    }
}
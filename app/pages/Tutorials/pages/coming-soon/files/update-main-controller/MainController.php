<?php

namespace app\controllers;

use core\Tone;
use app\models\Subscriber;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'TonePHP Framework',
           'TonePHP, framework'
       );

       if (isAjax()) {
           $data = json_decode(file_get_contents("php://input"), TRUE);
           $email = $data['email'];

           if ($email) {
                $subscriber_m = new Subscriber();
                $insertId = $subscriber_m->addNew($email);

                if ($insertId) {
                    header('Content-type: application/json');

                    echo json_encode([
                        'success' => true
                    ]);
                }
           }

          die;
        }
    }
}
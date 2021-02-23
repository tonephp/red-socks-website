<?php

namespace app\controllers\admin;

class ImageController extends AdminController {
  
  public function indexAction() {
    
    if (!empty($_FILES)) {
      foreach ($_FILES as $file) {
        debug($file);
        move_uploaded_file($file['tmp_name'], WWW . '/uploads/' . $file['name']);
      }

      exit;
    }
  }
}
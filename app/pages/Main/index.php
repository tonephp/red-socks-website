<?=$this->component('hero')?>

<?php new \app\widgets\menu\Menu([
  'template' => APP . '/widgets/menu/templates/menu.php',
  'cache' => 10
]); ?>
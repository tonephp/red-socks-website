<div class="header">
  <div class="container">
    <div class="header__cells">

      <div class="header__cell">
        <?=$this->component('logo')?>
      </div>

      <div class="header__cell">
        <?php new \app\widgets\menu\Menu([
          'template' => APP . '/widgets/menu/templates/menu.php',
          'cache' => 3600
        ]); ?>
      </div>
      
    </div>
  </div>
</div>

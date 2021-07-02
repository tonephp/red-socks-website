<div class="header">
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

    <div class="header__cell">
      <?php new \app\widgets\lang\Lang([
        'template' => APP . '/widgets/lang/templates/lang-dropdown/lang-dropdown.php'
      ]); ?>
    </div>

  </div>
</div>

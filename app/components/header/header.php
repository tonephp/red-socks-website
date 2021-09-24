<div class="header">
  <div class="container">
    <div class="header__inner">

      <div class="header__logo">
        <?=$this->component('logo')?>
      </div>

      <div class="header__navigation">
        <div class="header__navigation-cell">
          <div class="header__menu-wrapper">
            <?php new \app\widgets\menu\Menu([
              'template' => APP . '/widgets/menu/templates/menu.php',
              'cache' => 3600
            ]); ?>
          </div>
        </div>

        <div class="header__navigation-cell">
          <?=$this->component('button', [
            'title' => 'See tutorial',
            'link' => '/tutorials/coming-soon'
          ])?>
        </div>
      </div>
      
    </div>
  </div>
</div>

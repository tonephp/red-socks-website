<div class="a-header">
  <div class="a-header__cell">
    <?=$this->component('admin/logo')?>

  </div>

  <?php if ($this->isAuth()) : ?>

    <div class="a-header__cell">
      
      <a href="/admin/translate">Translate</a>
      
    </div>

    <div class="a-header__cell">
      
      <a href="/logout">Logout</a>
      
    </div>

  <?php endif; ?>
</div>
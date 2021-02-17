<div class="a-header">
  <div class="a-header__cell">
    <?=$this->component('admin/logo')?>

  </div>
  <div class="a-header__cell">
    <?php if ($this->isAuth()) : ?>
      <a href="/logout">Logout</a>
    <?php endif; ?>
  </div>
</div>
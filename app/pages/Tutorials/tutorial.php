<div class="container">
  <div class="p-tutorial">
    <div class="p-tutorial__sidebar">
      <?php require(APP . "/pages/Tutorials/sidebars/{$alias}.php")?>
    </div>
    <div class="p-tutorial__content">
      <?php customRequire(APP . "/pages/Tutorials/pages/$alias/$section.php")?>
    </div>
  </div>
</div>




<a href="<?=$href?>" class="tutorial-card" style="background-color: <?=$bg?>">
  <h2 class="tutorial-card__title"><?=$title?></h2>
  <p class="tutorial-card__description"><?=$description?></p>
  <?php if (isset($icon)): ?>
    <div class="tutorial-card__icon">
      <?=icon($icon)?>
    </div>
  <?php elseif (isset($image)): ?>
    <div class="tutorial-card__image-wrapper">
      <img src="<?=$image?>" alt="<?=$title?>" />
    </div>
  <?php endif; ?>
</a>
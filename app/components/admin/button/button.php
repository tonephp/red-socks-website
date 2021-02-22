<?php
  $title = $title ?? 'Default title';
  $href = $href ?? null;
  $theme = $theme ?? null;
  $blank = $blank ?? null;
  $icon = $icon ?? null;

  $theme = $theme ? " a-button--theme--$theme" : '';
  $tag = $href ? "a" : "button";
?>

<<?=$tag?> class="a-button<?=$theme?>" 
  <?=$href ? "href='$href'" : ''?> 
  <?=$blank ? "target='_blank'" : ''?>
>
  <div class="a-button__text">
    <?=$title?>
  </div>

  <?php if ($icon): ?>
    <div class="a-button__icon">
      <?=icon($icon)?>
    </div>
  <?php endif; ?>
</<?=$tag?>>
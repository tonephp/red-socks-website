<?php
  $title = $title ?? 'Default title';
  $class = $class ?? null;
  $class = $class ? " " . $class : null;
?>

<button class="button<?=$class?>">
  <span class="button__loader">
    <?=$this->component('loader')?>
  </span>
  <?=$title?>
</button>
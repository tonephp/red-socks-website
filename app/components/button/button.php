<?php
  $title = $title ?? 'Default title';
  $theme = $theme ?? 'primary';
  $link = $link ?? null;

  $tag = $link ? 'a' : 'button';
  $hrefAttr = $link ? "href='$link'" : null;
?>

<<?=$tag?>
  <?=$hrefAttr?>
  class="button button--theme--<?=$theme?>"
>
  <?=$title?>
</<?=$tag?>>
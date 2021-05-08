<?php
  $title = $title ?? 'Default title';
?>

<div class="info">
  <h2 class="info__title">
    <?=$title?>
  </h2>
  <div class="info__content">
    <ul>
      <?php foreach ($contentItems as $key => $item): ?>
        <li class="info__list-item">
          <div class="info__list-item-title">
            <div class="info__number"><?=$key + 1?>.</div>
            <div><?=$item['title']?></div>
          </div>
          
          <?php if (isset($item['code'])): ?>
            <code class="info__code"><?=trim($item['code'])?></code>
          <?php endif; ?>

          <?php if (isset($item['link'])): ?>
            <?php 
              $target = $item['link']['target'] ?? null;
              $target = $target ? " target='$target'" : null;
            ?>
            <a 
              href="<?=$item['link']['href']?>" 
              class="info__link"
              <?=$target?>
            >
              <?=$item['link']['title']?>
            </a>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
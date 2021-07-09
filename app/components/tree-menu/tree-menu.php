<?php
  $list = $list ?? null;
?>

<?php if ($list) : ?>

<div class="tree-menu js-tree-menu">
  <?php foreach ($list as $mainSection) : ?>

  <div class="tree-menu__main-section js-main-section <?=isset($mainSection['open']) && $mainSection['open'] ? 'is-open' : null?>">
    <div class="tree-menu__main-section-header js-main-section-header">
      <span class="tree-menu__arrow">
        <?=icon('arrow')?>
      </span>
      <span class="tree-menu__image-label">
        <?=icon($mainSection['icon'])?>
      </span>
      <span class="tree-menu__main-section-text">
        <?=$mainSection['title']?>
      </span>
    </div>
    <div class="tree-menu__main-section-content">

      <?php if (isset($mainSection['list'])): ?>

        <?php foreach ($mainSection['list'] as $subSection): ?>

          <div class="tree-menu__subsection js-subsection">
            <div class="tree-menu__subsection-header js-subsection-header">
              <span class="tree-menu__subsection-text">
                <?php if (!isset($subSection['list']) && isset($subSection['href'])): ?>
                  <a href="<?=$subSection['href']?>">
                <?php endif; ?>
                  <?=$subSection['title']?>
                <?php if (!isset($subSection['list']) && isset($subSection['href'])): ?>
                  </a>
                <?php endif; ?>
              </span>
              <?php if (isset($subSection['list'])): ?>
                <span class="tree-menu__arrow">
                  <?=icon('arrow')?>
                </span>
              <?php endif; ?>
            </div>
            <?php if (isset($subSection['list'])): ?>
              <div class="tree-menu__subsection-content">
        
                <?php foreach ($subSection['list'] as $nextSection): ?>
                  <div class="tree-menu__subsection">
                    <div class="tree-menu__subsection-header">
                      <span class="tree-menu__subsection-text">
                        <a href="<?=$nextSection['href']?>">
                          <?=$nextSection['title']?>
                        </a>
                      </span>
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            <?php endif; ?>
          </div>

        <?php endforeach; ?>

      <?php endif; ?>

    </div>
  </div>

  <?php endforeach; ?>
</div>

<?php endif; ?>
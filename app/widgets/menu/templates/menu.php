<li>
  <a href="<?=$category['link'];?>" class="w-menu__nav-link">
    <?=$tab . $category['title'];?>
  </a>
  <?php if (isset($category['childs'])) : ?>
    <ul>
      <?=$this->getMenuHtml($category['childs'], $tab . '-', false);?>
    </ul>
  <?php endif; ?>
</li>
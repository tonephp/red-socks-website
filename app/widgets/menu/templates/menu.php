<ul <?=$firstIteration ? 'class="w-menu"' : null?>>
  <li>
    <a href="?id=<?=$id;?>"><?=$tab . $category['title'];?></a>
    <?php if (isset($category['childs'])) : ?>
      <ul>
        <?=$this->getMenuHtml($category['childs'], $tab . '-', false);?>
      </ul>
    <?php endif; ?>
  </li>
</ul>
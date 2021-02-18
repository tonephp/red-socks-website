<ul class="a-lang-tabs">
  <?php foreach ($tabsList as $item): ?>
    <li class="a-lang-tabs__list-item<?=$item['active'] ? ' is-active' : null?>">
      <a
        href="<?=$item['href']?>"
        class="a-lang-tabs__link"
      ><?=$item['title']?></a>
    </li>
  <?php endforeach; ?>
</ul>
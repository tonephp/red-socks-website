<?=$lang?>
<ul>
  <?php foreach ($langs as $lang_item): ?>
    <li>
      <a href="/admin/translate/<?=$lang_item?>"><?=$lang_item?></a>
    </li>
  <?php endforeach; ?>
</ul>

<?php foreach ($items as $item): ?>
  <form action="/admin/translate/<?=$item['lang_alias']?>" method="POST">
    <?=$item['alias']?>
    <textarea name="value"><?=$item['value']?></textarea>
    <button>Save</button>

    <input type="hidden" value="<?=$item['id']?>" name="id" />
  </form>
<?php endforeach; ?>
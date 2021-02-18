<?=$this->component('admin/lang-tabs', ['tabsList' => $tabsList])?>

<?php foreach ($items as $item): ?>
  <form action="/admin/translate/edit/<?=$item['lang_alias']?>" method="POST">
    <?=$item['alias']?>
    <textarea name="value"><?=$item['value']?></textarea>
    <button>Save</button>
    <input type="hidden" value="<?=$item['id']?>" name="id" />
  </form>
<?php endforeach; ?>

<a href="/admin/translate/add/<?=$item['lang_alias']?>">Add new</a>
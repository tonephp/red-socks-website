<?=$this->component('admin/lang-tabs', ['tabsList' => $tabsList])?>

<form action="/admin/translate/add/<?=$lang?>" method="POST">

  <label for="alias">Alias</label>
  <input type="text" id="alias" name="alias" />

  <label for="value">Value</label>  
  <input type="text" id="value" name="value" />

  <button>Add</button>

  <input type="hidden" value="<?=$lang?>" name="lang_alias" />
</form>
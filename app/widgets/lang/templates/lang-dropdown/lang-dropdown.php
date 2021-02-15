<div class="w-lang-dropdown">
  <select class="w-lang-dropdown__select js-w-lang-dropdown__select">
    <?php foreach ($this->langs as $key => $value) : ?>
      <option value="<?=$key?>" <?=$this->lang['alias'] == $key ? 'selected' : null?>><?=$value['title']?></option>
    <?php endforeach; ?>
  </select>
  <span class="w-lang-dropdown__focus"></span>
</div>
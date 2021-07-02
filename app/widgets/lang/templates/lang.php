<select name="lang" id="w-lang">
  <option value="<?=$this->lang['code']?>"><?=$this->lang['title']?></option>

  <?php foreach ($this->langs as $key => $value) : ?>
    <?php if ($this->lang['code'] !== $key) : ?>
      <option value="<?=$key?>"><?=$value['title']?></option>
    <?php endif; ?>
  <?php endforeach; ?>
</select>

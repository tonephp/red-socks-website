<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="TonePHP Framework">
  <?=$this::getMeta(); ?>
  <link rel="icon" type="image/png" href="/favicon.png" />
  
  <link href="/dist/styles.css" rel="stylesheet">
</head>
<body>
  
  <div class="layout">
    <div class="layout__header">
      <?=$this->component('header', ['myVar' => 'header'])?>
    </div>
    <div class="layout__content">

      <?php if (isset($_SESSION['errors'])): ?>
        <?=$_SESSION['errors']; unset($_SESSION['errors'])?>
      <?php endif; ?>

      <?=$content;?>
    </div>
    <div class="layout__footer">
      <?=$this->component('footer')?>
    </div>
  </div>
  
  <script src="/dist/app.js"></script>
</body>
</html>

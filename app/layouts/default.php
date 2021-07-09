<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="TonePHP Framework">
  <?=$this::getMeta(); ?>
  <link rel="icon" type="image/png" href="/favicon.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">

<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/styles/default.min.css">

  
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

      <?php if (isset($_SESSION['success'])): ?>
        <?=$_SESSION['success']; unset($_SESSION['success'])?>
      <?php endif; ?>

      <?=$content;?>
    </div>
    <div class="layout__footer">
      <?=$this->component('footer')?>
    </div>
  </div>
  
  <script>
    var serverUrl = "<?=siteUrl()?>";
  </script>
  
  <script src="/dist/app.js"></script>
  <script src="/dist/admin.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/highlight.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="TonePHP Framework">
  <?=$this::getMeta(); ?>
  <link rel="icon" type="image/png" href="/favicon.png" />
  
  <link href="/dist/admin.css" rel="stylesheet">
</head>
<body>
  
  <div class="a-layout">

    <div class="a-layout__sidebar">
      <div class="a-layout__sidebar-body">

        <div class="a-layout__sidebar-header">
          <a href="/admin" class="a-layout__sidebar-logo">
            <?=icon('dashboard')?>
            <span class="a-layout__sidebar-logo-text">Dashboard</span>
          </a>
        </div>

        <?php if ($isAdmin): ?>

          <?=$this->component('admin/nav-item', [
            'icon' => 'translate',
            'title' => 'Translate',
            'href' => '/admin/translate'
          ])?>

          <?=$this->component('admin/nav-item', [
            'icon' => 'image',
            'title' => 'Images',
            'href' => '/admin/image'
          ])?>
          
          <?=$this->component('admin/nav-item', [
            'icon' => 'logout',
            'title' => 'Logout',
            'href' => '/logout'
          ])?>

        <?php endif; ?>

        <div class="a-layout__sidebar-footer">
          <?=$this->component('admin/button', [
            'href' => siteUrl(),
            'title' => 'See site',
            'theme' => 'special',
            'blank' => true,
            'icon' => 'external'
          ])?>
        </div>
        
      </div>
    </div>
    
    <div class="a-layout__content">

      <div class="a-layout__content-body">
        <?php if (isset($_SESSION['errors'])): ?>
          <?=$_SESSION['errors']; unset($_SESSION['errors'])?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
          <?=$_SESSION['success']; unset($_SESSION['success'])?>
        <?php endif; ?>

        <?=$content;?>
      </div>

    </div>
  </div>
  
  <script src="/dist/admin.js"></script>
</body>
</html>

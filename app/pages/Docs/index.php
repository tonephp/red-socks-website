<?=$this->component('sub-header', ['title' => 'Docs'])?>

<?=$this->component('admin/uploader')?>

<div class="docs">
  <div class="docs__sidebar">
    <ul>
      <li><a href="/docs/get-started">Get started</a></li>
      <li><a href="/docs/create-component">Create component</a></li>
      <li>
        <h3>Widgets</h3>
        <ul>
          <li><a href="/docs/create-menu-widget">Create menu widget</a></li>
        </ul>
      </li>
      <li>
        <h3>Composer</h3>
        <ul>
          <li><a href="/docs/use-composer">Use composer</a></li>
        </ul>
      </li>
      <li>
        <h3>Packages</h3>
        <ul>
          <li><a href="/docs/install-monolog">monolog/monolog</a></li>
          <li><a href="/docs/install-php-mailer">phpmailer/phpmailer</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="docs__content">
    <?=$docContent?>
  </div>
</div>
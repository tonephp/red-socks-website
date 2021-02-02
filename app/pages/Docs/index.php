<?=$this->component('sub-header', ['title' => 'Docs'])?>

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
    </ul>
  </div>
  <div class="docs__content">
    <?=$docContent?>
  </div>
</div>
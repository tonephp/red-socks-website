<div class="container">
  <div class="p-tutorial">
    <div class="p-tutorial__sidebar">
      <?=$this->component('tree-menu', [
        "list" => [
          [
            "title" => "Tutorial",
            "icon" => "start",
            "open" => true,
            "list" => [
              [
                "title" => "Installation",
                "href" => "/tutorials/coming-soon"
              ],
              [
                "title" => "Create Grid Component",
                "href" => "/tutorials/coming-soon-create-grid-component"
              ],
            ]
          ],
        ]
      ])?>
    </div>
    <div class="p-tutorial__content">
      <?php require(APP . "/pages/Tutorials/pages/{$alias}.php")?>
      
    </div>
  </div>
</div>




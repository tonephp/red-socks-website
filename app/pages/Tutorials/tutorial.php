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
                "title" => "Create grid Component",
                "href" => "/tutorials/coming-soon-create-grid-component"
              ],
              [
                "title" => "Update logo Component",
                "href" => "/tutorials/coming-soon-update-logo-component"
              ],
              [
                "title" => "Create coming-soon Component",
                "href" => "/tutorials/coming-soon-create-coming-soon-component"
              ],
              [
                "title" => "Create loader Component",
                "href" => "/tutorials/coming-soon-create-loader-component"
              ],
              [
                "title" => "Update button Component",
                "href" => "/tutorials/coming-soon-update-button-component"
              ],
              [
                "title" => "Create email-form Component",
                "href" => "/tutorials/coming-soon-create-email-form-component"
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




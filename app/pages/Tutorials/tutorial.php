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
              [
                "title" => "Create Database Table - subscriber",
                "href" => "/tutorials/coming-soon-create-table-subscriber"
              ],
              [
                "title" => "Create Subscriber model",
                "href" => "/tutorials/coming-soon-create-subscriber-model"
              ],
              [
                "title" => "Update Main Controller",
                "href" => "/tutorials/coming-soon-update-main-controller"
              ],
              [
                "title" => "Final Check",
                "href" => "/tutorials/coming-soon-final-check"
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




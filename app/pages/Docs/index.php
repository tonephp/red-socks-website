<div class="container">
  <?=$this->component('sub-header', ['title' => 'Docs'])?>

  <div class="docs">
    <div class="docs__sidebar">
      <?=$this->component('tree-menu', [
        "list" => [
          [
            "title" => "Get started",
            "icon" => "start",
            "list" => [
              [
                "title" => "Installation",
                "href" => "/docs/installation"
              ],
              [
                "title" => "Configuration",
                "list" => [
                  [
                    "title" => "DB",
                    "href" => "/docs/configuration-db"
                  ],
                  [
                    "title" => "Main",
                    "href" => "/docs/configuration-main"
                  ],
                  [
                    "title" => "Params",
                    "href" => "/docs/configuration-params"
                  ]
                ]
              ]
            ]
          ],
          [
            "title" => "The basics",
            "icon" => "basics",
            "list" => [
              [
                "title" => "Routing",
                "href" => "/docs/routing"
              ],
              [
                "title" => "Controllers",
                "href" => "/docs/controllers"
              ],
              [
                "title" => "Components",
                "href" => "/docs/components"
              ],
            ]
          ]
        ]
      ])?>
    </div>
    <div class="docs__content">
      <?=$docContent?>
    </div>
  </div>
</div>

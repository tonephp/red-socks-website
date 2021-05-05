<?=$this->component('info', [
  'title' => 'Create Site with TonePHP Starter Kit',
  'contentItems' => [
    [
      'title' => 'Clone repo',
      'code' => "
        git clone https://github.com/tonephp/starter-kit.git
      "
    ],
    [
      'title' => 'Follow this Starter Kit documentation link',
      'link' => [
        'title' => 'Starter Kit Documentation',
        'href' => 'https://github.com/tonephp/starter-kit#first-usage-'
      ]
    ]
  ]
])?>
<?=$this->component('hero')?>

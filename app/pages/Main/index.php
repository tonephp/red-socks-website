<?=$this->component('info', [
  'title' => 'Create Site with TonePHP Starter Kit',
  'contentItems' => [
    [
      'title' => 'Clone repo and go to project folder',
      'code' => "
        git clone https://github.com/tonephp/starter-kit.git
        cd starter-kit
      "
    ],
    [
      'title' => 'Run application in docker',
      'code' => "
        docker-compose up -d
      "
    ],
    [
      'title' => 'Install composer',
      'code' => "
        composer install
      "
    ],
    [
      'title' => 'Copy .env.example as .env',
      'code' => "
        cp .env.example .env
      "
    ],
    [
      'title' => 'Install node_modules',
      'code' => "
        yarn
      "
    ],
    [
      'title' => 'Run webpack in watch mode',
      'code' => "
        yarn start
      "
    ],
    [
      'title' => '
        Open phpmyadmin in browser with this credentials:</br>
        username: <b>user</b></br>
        password: <b>password</b>
      ',
      'link' => [
        'title' => 'http://localhost:40002/',
        'href' => 'http://localhost:40002/',
        'target' => '_blank'
      ]
    ],
    [
      'title' => 'Import database <b>starter_kit_db.sql</b> from the project root folder',
    ],
    [
      'title' => '
        Open site in browser.
        You can login with this credentials:</br>
        login: <b>admin</b></br>
        password: <b>admin123</b>
      ',
      'link' => [
        'title' => 'http://localhost:40001/',
        'href' => 'http://localhost:40001/',
        'target' => '_blank'
      ]
    ],
  ]
])?>
<?=$this->component('hero')?>

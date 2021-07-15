<div class="container">
  <div class="p-tutorials">
    <div class="p-tutorials__header">
      <?=$this->component('tutorials-header')?>
    </div>
    <div class="p-tutorials__list">
      <div class="p-tutorials__card">
        <?=$this->component('tutorial-card', [
          "href" => "/tutorials/coming-soon",
          "title" => "Coming soon site",
          "description" => "Create coming soon site",
          "icon" => "coming-soon",
          "bg" => "rgb(1 122 254)"
        ])?>
      </div>
      <div class="p-tutorials__card">
        <?=$this->component('tutorial-card', [
          "href" => "/tutorials/pick-colors",
          "title" => "Picking colors",
          "description" => "Pick colors like a pro",
          "image" => "/img/tutorials/colors/colors.png",
          "bg" => "rgb(199, 199, 199)"
        ])?>
      </div>
    </div>
  </div>
</div>
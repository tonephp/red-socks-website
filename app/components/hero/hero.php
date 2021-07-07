<div class="hero">
  <div class="container">
    <div class="hero__content">

      <h2 class="hero__main-text">The easiest way to create coming soon site</h2>
      <p class="hero__description">
        TonePHP - web-framework, which allows you to create websites, using tonephp/starter-kit.
        Follow step by step tutorial to create comming soon site. Or buy a finished project in the shop.
      </p>

      <div class="hero__buttons">
        <div class="hero__button-wrapper">
          <?=$this->component('button', [
            'title' => 'See tutorial',
            'link' => '/tutorials/coming-soon'
          ])?>
        </div>
        <div class="hero__button-wrapper">
          <?=$this->component('button', [
            'title' => 'Buy project',
            'theme' => 'bordered-primary',
            'link' => '/shop/coming-soon'
          ])?>
        </div>
      </div>

      <img 
        src="/img/under-construction.jpeg" 
        alt="Under Construction Site Demo" 
        class="hero__image"
      />

    </div>
  </div>
</div>
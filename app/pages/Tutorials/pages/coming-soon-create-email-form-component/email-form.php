<form class="email-form js-email-form">
  <div class="email-form__group">
    <input class="email-form__input js-email-input" type="email" placeholder="Enter your email" required />
    <div class="email-form__button-wrapper">
      <?=$this->component('button', [
        'title' => 'Nofify us',
        'class' => 'js-send-email'
      ])?>
    </div>
  </div>
  <div class="email-form__success-message">
        Your email was added! Thank you.
  </div>
</form>
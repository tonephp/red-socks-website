import axios from '../../src/axios';

const formEl = document.querySelector('.js-email-form');

if (formEl) {
  let isLoading = false;

  formEl.addEventListener('submit', (event) => {
    event.preventDefault();

    const inputEl = formEl.querySelector('.js-email-input');
    const buttonEl = formEl.querySelector('.js-send-email');

    if (inputEl && buttonEl && !isLoading) {
      isLoading = true;
      formEl.classList.add('is-loading');
      buttonEl.classList.add('is-loading');
      formEl.classList.remove('is-success');

      axios({
        method: "POST",
        url: "",
        data: {
          email: inputEl.value
        }
      }).then(res => {
        const data = res.data;

        if (data.success) {

          setTimeout(() => {
            isLoading = false;

            formEl.classList.remove('is-loading');
            buttonEl.classList.remove('is-loading');

            inputEl.value = '';

            formEl.classList.add('is-success');

            setTimeout(() => {
              formEl.classList.remove('is-success');
            }, 4000);

          }, 1000);
        }
      });
    }
  });
}
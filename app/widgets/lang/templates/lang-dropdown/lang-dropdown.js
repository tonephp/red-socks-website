const select = document.querySelector('.js-w-lang-dropdown__select');

if (select) {

  select.addEventListener('change', (event) => {
    const value = event.target.value;
    
    window.location = `/lang/change?lang=${value}`;
  });
}
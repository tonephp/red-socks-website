const langSelect = document.querySelector('#w-lang');

if (langSelect) {
  langSelect.addEventListener('change', (event) => {
    const value = event.target.value;
    
    window.location = `/lang/change?lang=${value}`;
  });
}
import './styles.scss';

const langSelect = document.querySelector('#w-lang');

langSelect.addEventListener('change', (event) => {
    const value = event.target.value;
    
    window.location = `/lang/change?lang=${value}`;
});
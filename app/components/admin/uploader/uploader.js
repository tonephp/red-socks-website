upload('#a-uploader', {
  multi: true,
  accept: ['.png', '.jpg', '.jpeg', '.gif']
});

export function upload(selector, options = {}) {
  let files = [];

  const input = document.querySelector(selector);
  const preview = document.createElement('div');
  preview.classList.add('preview');

  if (input) {
    const btnOpen = document.createElement('button');
    btnOpen.classList.add('btn');
    btnOpen.textContent = 'Open';
  
    if (options.multi) {
      input.setAttribute('multiple', true);
    }
  
    if (options.accept && Array.isArray(options.accept)) {
      input.setAttribute('accept', options.accept.join(','));
    }
  
    input.insertAdjacentElement('afterend', preview);
    input.insertAdjacentElement('afterend', btnOpen);
  
    const triggerInput = () => input.click();
  
    const changeHandler = event => {
      if (!event.target.files) {
        return
      }

      files = Array.from(event.target.files);

      preview.innerHTML = '';

      files.forEach(file => {
        if (!file.type.match('image')) {
          return
        }

        const reader = new FileReader();

        reader.onload = event => {
          
          preview.insertAdjacentHTML(
            'afterbegin',
            `
              <div class="a-uploader__image-preview-wrapper">
                <div class="a-uploader__preview-remove" data-name="${file.name}">&times;</div>
                <img src="${event.target.result}" class="a-uploader__image-preview" alt="${file.name}" />
                <div class="a-uploader__preview-info">
                  <span>${file.name}</span>
                  <span>${bytesToSize(file.size)}</span>
                </div>
              </div>
            `
          );
        }

        reader.readAsDataURL(file);
      })
    }
  
    btnOpen.addEventListener('click', triggerInput);
    input.addEventListener('change', changeHandler);

    preview.addEventListener('click', event => {
      if (!event.target.dataset.name) {
        return
      }

      const { name } = event.target.dataset;

      files = files.filter(file => file.name !== name);

      const block = preview
        .querySelector(`[data-name="${name}"`)
        .closest('.a-uploader__image-preview-wrapper');

      block.classList.add('is-removing');

      setTimeout(() => block.remove(), 300);
    });
  }
}

export function bytesToSize(bytes) {
  var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
  if (bytes == 0) return '0 Byte';
  var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
  return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
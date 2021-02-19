export const element = (tag, classes = [], content) => {
  const node = document.createElement(tag);

  if (classes.length) {
    node.classList.add(...classes);
  }

  if (content) {
    node.textContent = content;
  }

  return node;
}

function noop() {}

export function upload(selector, options = {}) {
  let files = [];
  const onUpload = options.onUpload ?? noop;
  const input = document.querySelector(selector);
  const preview = element('div', ['preview']);

  if (input) {
    const btnOpen = element('button', ['btn'], 'Open');
    const btnUpload = element('button', ['btn', 'btn-primary'], 'Upload');
    btnUpload.style.display = 'none';
  
    if (options.multi) {
      input.setAttribute('multiple', true);
    }
  
    if (options.accept && Array.isArray(options.accept)) {
      input.setAttribute('accept', options.accept.join(','));
    }
  
    input.insertAdjacentElement('afterend', preview);
    input.insertAdjacentElement('afterend', btnUpload);
    input.insertAdjacentElement('afterend', btnOpen);
  
    const triggerInput = () => input.click();
  
    const changeHandler = event => {
      if (!event.target.files) {
        return
      }

      files = Array.from(event.target.files);

      preview.innerHTML = '';
      btnUpload.style.display = 'inline';

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

    const uploadHandler = event => {
      preview.querySelectorAll('.a-uploader__preview-remove').forEach(element => element.remove());

      onUpload(files);
    }

    const removeHandler = event => {
      if (!event.target.dataset.name) {
        return
      }

      const { name } = event.target.dataset;

      files = files.filter(file => file.name !== name);

      if (!files.length) {
        btnUpload.style.display = 'none';
      }

      const block = preview
        .querySelector(`[data-name="${name}"`)
        .closest('.a-uploader__image-preview-wrapper');

      block.classList.add('is-removing');

      setTimeout(() => block.remove(), 300);
    }
  
    btnOpen.addEventListener('click', triggerInput);
    input.addEventListener('change', changeHandler);
    preview.addEventListener('click', removeHandler);
    btnUpload.addEventListener('click', uploadHandler);
  }
}

export function bytesToSize(bytes) {
  var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
  if (bytes == 0) return '0 Byte';
  var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
  return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
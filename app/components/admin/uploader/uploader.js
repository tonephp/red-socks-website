import { upload } from './utils';

upload('#a-uploader', {
  multi: true,
  accept: ['.png', '.jpg', '.jpeg', '.gif'],
  onUpload(files) {
    console.log('Files:', files);
  }
});
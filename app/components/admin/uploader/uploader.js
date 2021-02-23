import { upload } from './utils';
import axios from 'axios';

upload('#a-uploader', {
  multi: true,
  accept: ['.png', '.jpg', '.jpeg', '.gif'],
  onUpload(files) {
    const formData = new FormData();

    files.forEach((file, idx) => {
      formData.append("file" + idx, file);
    });

    axios({
      method: "POST",
      url: serverUrl + "admin/image",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data",
        "X-Requested-With": "XMLHttpRequest"
      }
    })
  }
});
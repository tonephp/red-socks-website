import axios from 'axios';

const instance = axios.create({
  baseURL: serverUrl,
  headers: {
    "X-Requested-With": "XMLHttpRequest"
  }
});

export default instance;
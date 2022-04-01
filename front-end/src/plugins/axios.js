import axios from 'axios';

export default {
  install: (app, options) => {
    async () => {
      axios.defaults.headers.common = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': await axios.get('/api/token').then((response) => response.data)
      }
    }

    app.config.globalProperties.$axios = axios
  }
}
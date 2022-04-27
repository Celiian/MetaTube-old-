import { createApp } from 'vue'
import App from './App.vue'
/* import Home from '../src/views/Home.vue' */
import i18n from './i18n'
import router from './router/index.js'

createApp(App).use(router).use(i18n).mount('#app')

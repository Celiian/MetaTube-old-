import { createApp } from 'vue'
import i18n from './i18n'
import searchPage from './components/SearchPage.vue'

createApp(searchPage).use(i18n).mount('#app')

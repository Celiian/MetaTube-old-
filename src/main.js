import { createApp } from 'vue'
import i18n from './i18n'
import searchBar from './components/SearchBar.vue'

createApp(searchBar).use(i18n).mount('#app')

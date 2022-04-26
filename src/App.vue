<template>
  <SearchPage />
</template>

<script>
import SearchPage from './components/SearchPage.vue';
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'

export default defineComponent({
  components: { SearchPage },
  name: 'HelloI18n',
  setup() {
    const { t } = useI18n({
      inheritLocale: true,
      useScope: 'local'
    })
    return { t }
  }
})



</script>
 
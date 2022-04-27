<template>
  <Home />
</template>

<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import Home from "./views/Home.vue"
export default defineComponent({
  components:{
    Home
  },
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
 
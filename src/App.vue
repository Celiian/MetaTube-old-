<template>
    <Navbar />
    <router-view />
</template>

<script>
import { defineComponent } from "vue";
import { useI18n } from "vue-i18n";
import Navbar from "./components/Navbar.vue"

export default defineComponent({
  components:{
    Navbar,
  },
    name: "HelloI18n",
    setup() {
        const { t } = useI18n({
            inheritLocale: true,
            useScope: "local",
        });
        return { t };
    },
});
</script>

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
<<<<<<< HEAD

essai
=======
>>>>>>> 8859d9b33a36c5b0cc8a2ecfa47124d6cb67bf59

<template>
  <div id="searchbar" class="row">
    <form method="POST" action="">
      <div class="nav-search-box">
        <input
          type="text"
          name="searchbar-content"
          id="searchbar-content"
          placeholder="Search Pradish"
        />
        <div class="search-button">
          <img class="search-icon"
            src="../img/magnifying-glass-solid.svg
"
            alt="magnifying glass" @click="fonctionDeRecherche"
          />

        </div>

      </div>
    </form>
  </div>
</template>

<style>
@import url("../style/global.css");
@import url("../style/SearchBar.css");
</style>

<script>
import { defineComponent } from "vue";
import { useI18n } from "vue-i18n";

export default defineComponent({
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

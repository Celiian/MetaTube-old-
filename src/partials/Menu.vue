<template>
  <div class="short-menu">
    <div class="sticky-menu">
      <div class="hamburger-button-home" v-on:click="openMenu()">
        <div class="lines">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="short-menu-items">
        <div class="nav-item-short">
          <img
            src="../img/Menu-svg/Home.svg"
            alt=""
            srcset=""
            class="nav-logo-short"
          />
          <p>{{ t("menu.nav-elements.Home") }}</p>
        </div>
        <div class="nav-item-short">
          <img
            src="../img/Menu-svg/compass.svg"
            alt=""
            srcset=""
            class="nav-logo-short"
          />
          <p>{{ t("menu.nav-elements.Explorer") }}</p>
        </div>
        <div class="nav-item-short">
          <img
            src="../img/Menu-svg/sublogo.svg"
            alt=""
            srcset=""
            class="nav-logo-short"
          />
          <p>{{ t("menu.nav-elements.Subscriptions") }}</p>
        </div>
        <div class="nav-item-short">
          <img
            src="../img/Menu-svg/library.svg"
            alt=""
            srcset=""
            class="nav-logo-short"
          />
          <p>{{ t("menu.nav-elements.Library") }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="hamburger-menu-container">
    <div class="header-menu">
      <div class="hamburger-button" v-on:click="closeMenu()">
        <div class="lines">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <img src="../img/Logo/MetatubeLogo.png" class="logo-header-menu" />
    </div>

    <div class="nav-body">
      <div class="nav-items">
        <div class="nav-item">
          <img
            src="../img/Menu-svg/Home.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.Home") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/compass.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.Explorer") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/sublogo.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.Subscriptions") }}</p>
        </div>
      </div>

      <!--  -->
      <div class="nav-items">
        <div class="nav-item">
          <img
            src="../img/Menu-svg/library.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.Library") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/history.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.History") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/sublogo.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.YourVideos") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/watchlater.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.WatchLaters") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/like.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.LikedVideos") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
      </div>
      <div class="menu-subscriptions">
        <strong class="title-subscriptions">
          {{ t("menu.titles.subscriptions") }}
        </strong>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
      </div>

      <div class="menu-subscriptions nav-items">
        <strong class="title-others">
          {{ t("menu.titles.others") }}
        </strong>

        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
      </div>

      <div class="nav-items">
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
        <div class="nav-item">
          <img
            src="../img/Menu-svg/angle-down-solid.svg"
            alt=""
            srcset=""
            class="nav-logo"
          />
          <p>{{ t("menu.nav-elements.More") }}</p>
        </div>
      </div>

      <div class="nav-items menu-footer">
        <div class="links">
          <a class="menu-text-footer">{{ t("menu.footer.link1") }}</a>
          <a class="menu-text-footer">{{ t("menu.footer.link2") }}</a>
          <a class="menu-text-footer">{{ t("menu.footer.link3") }}</a>
          <a class="menu-text-footer">{{ t("menu.footer.link4") }}</a>
          <a class="menu-text-footer">{{ t("menu.footer.link5") }}</a>
        </div>
        <a class="menu-text-footer copyright">{{
          t("menu.footer.copyright")
        }}</a>
      </div>
    </div>
  </div>
</template>

<style scoped>
@import url("../style/global.css");
@import url("../style/Menu.css");
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
    function closeMenu() {
      const menu = document.getElementsByClassName("hamburger-menu-container");
      menu[0].style.transform = "translateX(var(--menu-width-close))";
      menu[0].style.transition = "transform 280ms ease-out";
    }
    function openMenu() {
      const menu = document.getElementsByClassName("hamburger-menu-container");
      menu[0].style.transform = "translateX(var(--menu-width))";
      menu[0].style.transition = "transform 280ms ease-out";
    }
    return { t, closeMenu, openMenu };
  },
});
</script>
 
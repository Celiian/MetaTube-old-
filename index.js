/* eslint-disable */
import { createRouter, createWebHashHistory } from "vue-router";
import Register from "../views/Register.vue";
import Login from "../views/Login.vue";
import Home from "../views/Home.vue";
import Settings from "../views/Settings.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/settings",
        name: "settings",
        component: Settings,
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;

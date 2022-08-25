import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";
import "vue-universal-modal/dist/index.css";
import VueUniversalModal from "vue-universal-modal";
import AdminPage from "./pages/AdminPage.vue";
import HomePage from "./pages/HomePage.vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";

import { createRouter, createWebHashHistory, createWebHistory } from "vue-router";
const app = createApp(App);

const routes = [
    { path: "/", component: HomePage },
    { path: "/admin", component: AdminPage },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

app.component("v-select", vSelect);

app.use(router);

app.use(VueUniversalModal, {
    teleportTarget: "#modals",
});

app.mount("#app");

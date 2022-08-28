import { createRouter, createWebHistory } from "vue-router";
import AdminPage from "../pages/AdminPage.vue";
import HomePage from "../pages/HomePage.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: HomePage },
        { path: "/admin", component: AdminPage },
    ],
});

export default router;

<script setup>
    import MetaTags from "./layout/MetaTags.vue";
    import Navigation from "./layout/Navigation.vue";
    import Footer from "./layout/Footer.vue";

    import { onMounted, provide, ref } from "vue";
    import { getUser } from "./utils/api";

    const user = ref(null);
    provide("user", user);

    onMounted(async () => {
        console.log("App mounted");
        try {
            if (localStorage.getItem("token")) {
                user.value = await getUser();
            } else user.value = false;
        } catch {
            user.value = false;
        }
    });
</script>

<template>
    <MetaTags />
    <Navigation />
    <main>
        <router-view></router-view>
    </main>
    <Footer />
</template>

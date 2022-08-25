<script setup>
    import HomePage from "./pages/HomePage.vue";
    import AdminPage from "./pages/AdminPage.vue";
    import Navigation from "./components/layout/Navigation.vue";
</script>

<template>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />

    <Navigation />
    <main>
        <router-view></router-view>
    </main>
</template>

<style scoped>
    body {
    }

    main {
        max-width: 1315px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>

<script setup>
    import HomePage from "./pages/HomePage.vue";
    import AdminPage from "./pages/AdminPage.vue";
    import Navigation from "./components/layout/Navigation.vue";
    import Footer from "./components/layout/Footer.vue";
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

    <Footer />
</template>

<style>
    body {
    }

    main {
        max-width: 1315px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 70vh;
        padding-bottom: 10vh;
    }

    main > * {
        opacity: 0;
        animation: fadeIn 0.4s linear forwards;
        animation-delay: 0.5s;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>

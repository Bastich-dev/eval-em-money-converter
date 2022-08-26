<script setup>
    import HomePage from "./pages/HomePage.vue";
    import AdminPage from "./pages/AdminPage.vue";
    import Navigation from "./components/layout/Navigation.vue";
    import Footer from "./components/layout/Footer.vue";
    import { ref } from "vue";

    const user = ref({ lol: "lol" });
    // export default {
    //     data() {
    //         return {
    //             user: null,
    //         };
    //     },
    // };
</script>

<template>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <Navigation />
    <main>
        <router-view v-bind:user="user"></router-view>
    </main>
    <Footer />

    <notifications position="bottom right" animation-type="velocity" duration="5" />
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

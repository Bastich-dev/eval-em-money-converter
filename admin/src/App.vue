<script setup>
    import ConvertCurrency from "./components/ConvertCurrency.vue";
    import Navigation from "./components/Navigation.vue";
</script>

<template>
    <Navigation />
    <main>
        <h1>Convertisseur de monnaie</h1>
        <ConvertCurrency />
    </main>
</template>

<style scoped>
    body {
    }

    h1 {
        font-size: 2.5vw;
        margin: 10vh 0 10vh 0;
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

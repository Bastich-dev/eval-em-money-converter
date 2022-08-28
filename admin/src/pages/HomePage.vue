<script setup>
    import ConvertCurrencies from "../components/home/ConvertCurrencies.vue";
    import ListPairs from "../components/home/ListPairs.vue";
</script>

<template>
    <h1>Convertisseur de monnaie</h1>
    <ConvertCurrencies />
    <ListPairs />
</template>

<style scoped>
    h1 {
        text-align: center;
        margin: 50px 0 10vh 0;
        font-size: calc(30px + 1.5vw);
    }
</style>

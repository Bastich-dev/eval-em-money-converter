<script setup>
    import LoginForm from "../components/admin/LoginForm.vue";
    import EditCurrency from "../components/admin/EditCurrency.vue";

    const isConnected = false;
</script>

<template>
    <EditCurrency v-if="isConnected" />
    <LoginForm v-if="!isConnected" />
</template>

<style>
    section {
        padding: 20vh 0 0vh 0;
        min-height: 50vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>

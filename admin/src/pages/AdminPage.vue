<script setup>
    import LoginForm from "../components/admin/LoginForm.vue";
    import EditCurrencies from "../components/admin/EditCurrencies.vue";
    import { inject } from "vue";
    const user = inject("user");
</script>

<template>
    <component :is="!!user ? EditCurrencies : LoginForm" />
</template>

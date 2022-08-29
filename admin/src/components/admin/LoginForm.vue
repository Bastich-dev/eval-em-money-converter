<script setup>
    import { login } from "../../utils/api";
    import { useToast } from "vue-toastification";
    import { inject, ref } from "vue";
    import Loading from "../common/Loading.vue";
    const toast = useToast();

    const user = inject("user");

    let loading = ref(false);

    function getFormValues({ target }) {
        loading.value = true;
        login({
            email: target.elements["email"].value,
            password: target.elements["password"].value,
            //
        })
            .then(response => {
                toast.success(`Connexion réussie`);
                user.value = response;
            })
            .catch(() => {
                toast.error(`Erreur connexion - Identifiants introuvables`);
            })
            .finally(() => {
                loading.value = false;
            });
    }
</script>

<template>
    <form v-if="user !== null" class="fadeIn card" @submit.prevent="getFormValues">
        <div>
            <h1>Espace administrateur</h1>
            <label>E-mail</label>
            <input required name="email" type="text" />
            <label>Mot de passe</label>
            <input required name="password" type="password" />
            <button v-bind:class="{ disabled: loading }" :disabled="loading">
                <Loading v-if="loading" />
                <span v-else> Se connecter </span>
            </button>

            <small><u>Identifiants pour Démo :</u></small>
            <small> johndoe@example.org </small>
            <small> password123 </small>
        </div>
    </form>
    <div v-else>
        <Loading />
    </div>
</template>

<style scoped>
    .card {
        max-width: 400px;
    }
    .card > div {
        flex-direction: column;
        align-items: flex-start;
    }

    small {
        color: #777;
        margin: 0;
        line-height: 1.4;
    }

    label {
        margin-bottom: 3px;
        margin-top: 15px;
    }
    input {
        width: -webkit-fill-available;
    }
    button {
        margin-bottom: 30px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        padding: 15px;
    }
</style>

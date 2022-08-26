<script>
    import api from "../../utils/api";
    import { notify } from "@kyvg/vue3-notification";

    export default {
        data() {
            return {
                loading: false,
            };
        },
        methods: {
            async getFormValues(submitEvent) {
                this.loading = true;
                const { username, password } = submitEvent.target.elements;
                const response = await api.login({ email: username.value, password: password.value });
                setTimeout(() => {
                    if (response) {
                        console.log(response);
                        notify({
                            title: "Connexion espace administrateur réussie",
                            text: "Vous pouvez à présent ajouter / modifier / supprimer des monnaies.",
                            type: "success",
                        });
                    } else {
                        notify({
                            title: "Erreur connexion espace administrateur",
                            text: "Identifiants introuvables.",
                            type: "error",
                        });
                    }
                    this.loading = false;
                }, 400);
            },
        },
    };
</script>

<template>
    <section>
        <form class="card" @submit.prevent="getFormValues">
            <div>
                <h1>Espace administrateur</h1>
                <label>Identifiant</label>
                <input required name="username" type="text" />
                <label>Mot de passe</label>
                <input required name="password" type="password" />
                <button v-bind:class="loading ? 'disabled' : ''" :disabled="loading">
                    <span v-if="loading">
                        <div class="lds-ellipsis">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </span>
                    <span v-else> Se connecter </span>
                </button>

                <small><u>Identifiants pour Démo :</u></small>
                <small> johndoe@example.org </small>
                <small> password </small>
            </div>
        </form>
    </section>
</template>

<style scoped>
    .card {
        width: 100vw;
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

    h1 {
        font-size: 32px;
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

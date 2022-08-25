<script setup></script>

<template>
    <section>
        <form class="card">
            <div>
                <h1>Espace administrateur</h1>

                <label>Identifiant</label>
                <input type="text" />

                <label>Mot de passe</label>
                <input type="password" />

                <button>Se connecter</button>
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
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

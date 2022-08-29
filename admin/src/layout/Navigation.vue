<script setup>
    import { inject, onMounted, ref } from "vue";
    import { pingServer, logout } from "../utils/api";
    import { useRouter, useRoute } from "vue-router";
    import { useToast } from "vue-toastification";
    import Loading from "../components/common/Loading.vue";

    const route = useRoute();
    const { push } = useRouter();
    const toast = useToast();
    const user = inject("user");
    const serverStatus = ref(false);
    const openModal = ref(false);
    const loading = ref(false);

    onMounted(async () => {
        serverStatus.value = await pingServer();
    });

    const goToAdmin = () => {
        push("/admin");
    };

    const goToPublic = () => {
        push("/");
    };
    const testServerStatus = async () => {
        serverStatus.value = await pingServer();
    };

    const closeModal = () => {
        openModal.value = false;
    };
    const showModal = () => {
        openModal.value = true;
    };

    const acceptLogout = async () => {
        loading.value = true;
        try {
            await logout();
        } catch {}
        user.value = false;
        toast.success("Vous êtes déconnecté");
        closeModal();
        loading.value = false;
    };
</script>

<template>
    <header>
        <nav>
            <a @click="goToPublic" target="_blank">
                <img src="../../public/logo.svg" class="logo" alt="Vue logo" />
                <strong>Currency Converter</strong>
            </a>
            <!-- <vi -->
            <div>
                <span v-bind:style="!!user ? 'color:yellowgreen' : 'color:red'" class="material-symbols-outlined"> fiber_manual_record </span>
                <a v-if="!!user" href="#" @click="showModal" class="server-status">Utilisateur : {{ user.email }}</a>
                <a v-if="!!!user" @click="testServerStatus" class="server-status">Utilisateur : Non connecté</a>

                <span v-bind:style="!!serverStatus ? 'color:yellowgreen' : 'color:red'" class="material-symbols-outlined"> fiber_manual_record </span>
                <a
                    href="https://currency-converter-em.herokuapp.com/api/ping"
                    target="_blank"
                    rel="noopenner noreferrer"
                    v-if="serverStatus"
                    class="server-status"
                    >API Status : Online</a
                >
                <a v-if="!serverStatus" @click="testServerStatus" class="server-status">API Status : Offline</a>

                <button v-if="route.path === '/'" class="nav-button" @click="goToAdmin">Espace administrateur</button>
                <button v-if="route.path !== '/'" class="nav-button" @click="goToPublic">Espace public</button>
            </div>
        </nav>
        <Modal v-model="openModal" :close="closeModal">
            <div class="card">
                <h2>Se déconnecter ?</h2>
                <button @click="acceptLogout" :disabled="loading">
                    <Loading v-if="loading" />
                    <span v-else>Deconnexion</span>
                </button>
            </div>
        </Modal>
    </header>
</template>

<style scoped>
    .card {
        max-width: 300px;
    }
    header {
        box-shadow: 0px 5px 30px silver;
    }
    nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1315px;
        margin: 0 auto;
    }

    nav > * {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .server-status {
        margin-right: 60px;
        margin-left: 5px;
        font-weight: bold;
    }
    .material-symbols-outlined {
        font-size: 28px;
    }

    strong {
        font-size: calc(14px + 0.8vw);
    }

    a {
        color: var(--font_light_color);
    }

    nav > a {
        font-size: 20px;
        text-decoration: none;
        transition: 0.7s;
        margin: 10px 0;
        cursor: pointer;
    }

    @media (max-width: 527px) {
        nav > div > a {
            width: 260px;
        }
    }

    .logo {
        height: 2.5em;
        will-change: filter;
        padding: 10px;
        transition: 1s;
        margin-right: 15px;
    }

    nav > a:hover {
        filter: drop-shadow(0 0px 1em var(--primary_light_color));
    }
    button {
        min-width: 250px;
        display: flex;
        justify-content: center;
        margin: 10px 0;
        align-items: center;
    }
</style>

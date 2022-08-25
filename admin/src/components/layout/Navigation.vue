<script>
    const serverStatus = false;

    export default {
        methods: {
            goToAdmin() {
                this.$router.push("/admin");
            },
            goToPublic() {
                this.$router.push("/");
            },
        },
    };
</script>

<template>
    <header>
        <nav>
            <a @click="goToPublic" target="_blank">
                <img src="../../assets/vue.svg" class="logo" alt="Vue logo" />
                <strong>Money Converter</strong>
            </a>
            <!-- <vi -->

            <div>
                <span v-bind:style="serverStatus ? 'color:green' : 'color:red'" class="material-symbols-outlined"> fiber_manual_record </span>
                <a v-if="serverStatus" href="#" class="server-status">API Online</a>
                <a v-if="!serverStatus" class="server-status">API Offline</a>
                <button v-if="this.$route.path === '/'" class="nav-button" @click="goToAdmin">Espace administrateur</button>
                <button v-if="this.$route.path !== '/'" class="nav-button" @click="goToPublic">Espace public</button>
            </div>
        </nav>
    </header>
</template>

<style scoped>
    header {
        box-shadow: 0px 5px 30px #111111;
        padding: 8px 0;
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
        font-size: 1.6vw;
    }

    a {
        color: white;
    }

    nav > a {
        font-size: 20px;
        margin-right: 35px;
        text-decoration: none;
        transition: 0.7s;
        cursor: pointer;
    }
    .logo {
        height: 2.5em;
        will-change: filter;
        padding: 10px;
        transition: 1s;
        margin-right: 15px;
    }

    nav > a:hover {
        filter: drop-shadow(0 0px 1em #42b883);
    }
    button {
        min-width: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

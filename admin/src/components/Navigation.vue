<script setup></script>

<template>
    <nav>
        <a href="https://vuejs.org/" target="_blank">
            <img src="../assets/vue.svg" class="logo vue" alt="Vue logo" />
        </a>
        <a href="#">Github</a>
        <a href="#">Portfolio développeur</a>
    </nav>
</template>

<style scoped>
    nav {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        max-width: 1315px;
        margin: 0 auto;
    }

    a {
        font-size: 20px;
        margin-right: 35px;
        text-decoration: none;
    }
    .logo {
        height: 2.5em;
        will-change: filter;
        padding: 10px;
        transition: 1s;
        margin-right: 50px;
    }

    .a:hover {
        filter: drop-shadow(0 0 3em #42b883aa);
    }
</style>

<script>
    export default {
        methods: {},
    };
</script>

<template>
    <footer>
        <a href="https://github.com/BastosC/eval-em-aout-2022" target="_blank" rel="noreferrer noopenner">
            Plus d'informations sur le projet & le travail rendu {{ "-->" }} <b>ICI</b> {{ "<--" }}
            <span class="material-symbols-outlined"> link </span>
            Github
        </a>
    </footer>
</template>

<style scoped>
    footer {
        display: flex;
        justify-content: center;
        align-items: center;

        width: max-content;
        margin: 0 auto;
    }

    a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: black;
        padding: 20px 50px;
        border-radius: 4px;
        background-color: white;
        transition: 0.4s;
        font-weight: bold;
    }
    a b {
        margin: 0 6px;
    }
    a:hover {
        color: #28ab70;
        transform: translateY(-4px);
    }

    footer a span {
        margin: 0 6px;
    }
</style>

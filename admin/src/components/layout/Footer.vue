<script>
    export default {
        methods: {},
    };
</script>

<template>
    <footer>
        <a href="#">
            Vous pouvez trouver plus d'informations sur le projet & les travaux rendus <b>ICI</b>
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

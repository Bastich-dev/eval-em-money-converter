<template>
    <footer>
        <a href="https://github.com/BastosC/eval-em-aout-2022" target="_blank" rel="noreferrer noopenner">
            Plus d'informations sur le projet & les rendus complémentaires -->
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

        margin: 30px auto;
    }

    a {
        text-align: center;
        justify-content: center;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: black;
        padding: 20px 50px;
        border-radius: 4px;
        background-color: white;
        transition: 0.4s;
        flex-wrap: wrap;
        font-weight: bold;
    }

    a:hover {
        color: var(--primary_color);
        transform: translateY(-4px);
    }

    footer a span {
        margin: 0 6px;
    }
</style>

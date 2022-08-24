<script setup></script>

<template>
    <form class="card">
        <div>
            <div class="currency">
                <img src="" />
                <b>€ FRA</b>
            </div>
            <div class="currency">
                <img src="" />
                <b>€ FRA</b>
            </div>
        </div>
        <div class="result">
            <span>Info</span>
            <button>Convertir</button>
        </div>
    </form>
</template>

<style scoped>
    /* Card */
    .card {
        padding: 30px;
        max-width: 1000px;
        width: 100%;
        border-radius: 10px;
        background-color: white;
    }

    .card > div {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Currency */
    .currency {
    }

    .currency img {
    }
    .currency b {
    }

    /* Result */
    .result {
    }
    .result span {
    }
    .result button {
        background-color: #98a6d4;
        border-radius: 50px;
        border: none;
        padding: 10px 35px;
        font-size: 20px;
    }
</style>

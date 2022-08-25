<script>
    // console.log(new Intl.NumberFormat("de-DE", { style: "currency", currency: "ARS" }).format(number));
</script>

<template>
    <form class="card">
        <div class="currencies">
            <div></div>

            <div>
                <input type="number" />
            </div>
            <div class="currency">
                <img src="" />
                <select>
                    <option>
                        <b>€ FRA</b>
                    </option>
                </select>
            </div>
            <div class="animation-arrow">
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
            </div>
            <div class="currency">
                <img src="" />
                <select>
                    <option>
                        <b>€ FRA</b>
                    </option>
                </select>
            </div>
            <div></div>
            <div></div>
        </div>
        <div class="result">
            <h2>50 USD</h2>
            <span class="material-symbols-outlined"> arrow_right_alt </span>
            <h2>50 €</h2>
        </div>
        <div class="actions">
            <span>Les taux de conversions sont purement indicatifs et ne sont pas ceux que vous aurez en échangeant de l'argent.</span>
            <button v-bind:class="true ? 'disabled' : 'disabled'" v-bind:disabled="true ? true : true">Convertir</button>
        </div>
    </form>
</template>

<style scoped>
    .result {
        display: flex;
        justify-content: center;
        margin: 40px 0;
        font-size: 32px !important;
        color: #28ab70;
    }
    .result span {
        font-size: 38px;
        margin: 0 20px;
    }

    select {
        padding: 10px 55px;
        font-size: 24px;
        background-color: white;
        color: black;
        border-radius: 5px;
    }
    .animation-arrow .material-symbols-outlined {
        font-size: 42px;
        width: 20px;
        animation: anim 2s linear infinite alternate forwards;
    }
    .animation-arrow .material-symbols-outlined:nth-child(1) {
        animation-delay: 0s;
    }
    .animation-arrow .material-symbols-outlined:nth-child(2) {
        animation-delay: 0.4s;
    }
    .animation-arrow .material-symbols-outlined:nth-child(3) {
        animation-delay: 0.8s;
    }
    .animation-arrow .material-symbols-outlined:nth-child(4) {
        animation-delay: 1.2s;
    }
    .animation-arrow .material-symbols-outlined:nth-child(5) {
        animation-delay: 1.6s;
    }

    @keyframes anim {
        0%,
        50% {
            color: #28ab70;
        }
        70%,
        100% {
            color: black;
        }
    }
    .animation-arrow .material-symbols-outlined:last-child {
        margin-right: 15px;
    }

    input {
        padding: 10px 25px;
        font-size: 24px;
        width: 150px;
    }

    /* Currency */
    .currencies {
        margin-top: 20px;
    }
    .currency {
    }

    .currency img {
    }
    .currency b {
    }

    /* actions */
    .actions {
    }
    .actions span {
        border: 1px solid silver;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 12px;
        background-color: rgb(206, 243, 231);
        max-width: 350px;
        line-height: 1.5;
    }
    .actions button {
        border-radius: 50px;
        border: none;
        padding: 12px 75px;
        font-size: 26px;
        margin: 0 auto;
    }

    .actions button.disabled {
        cursor: not-allowed;
        background-color: #aaa;
    }
</style>

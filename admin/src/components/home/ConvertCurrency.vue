<script>
    // console.log(new Intl.NumberFormat("de-DE", { style: "currency", currency: "ARS" }).format(number));

    import { notify } from "@kyvg/vue3-notification";

    export default {
        data() {
            return {
                result: null,
                conversion: null,
            };
        },
        methods: {
            async getFormValues(submitEvent) {
                const { currency_1, currency_2, amount } = submitEvent.target.elements;
                if (currency_1?.value && currency_2?.value && amount?.value) {
                    const numberResult = 50;
                    this.conversion = `${amount?.value} ${currency_1?.value}`;
                    this.result = `${numberResult} ${currency_2?.value}`;
                } else {
                    notify({
                        title: "Erreur conversion",
                        text: "Veuillez choisir un montant ainsi que deux monnaies pour effectuer une conversion.",
                        type: "error",
                    });
                }
            },
        },
    };
</script>

<template>
    <form class="card" @submit.prevent="getFormValues">
        <div class="currencies">
            <div></div>
            <div>
                <input name="amount" type="number" />
            </div>
            <div class="currency">
                <img src="" />
                <select name="currency_1">
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
                <select name="currency_2">
                    <option>
                        <b>€ FRA</b>
                    </option>
                </select>
            </div>
            <div></div>
            <div></div>
        </div>
        <div class="result">
            <div v-bind:style="!!result ? 'top:0px' : 'top:-100px'">
                <h2>{{ conversion }}</h2>
                <span class="material-symbols-outlined"> arrow_right_alt </span>
                <h2>{{ result }}</h2>
            </div>
        </div>
        <div class="actions">
            <span>Les taux de conversions sont purement indicatifs et ne sont pas ceux que vous aurez en échangeant de l'argent.</span>
            <button v-bind:class="true ? 'disabled' : 'disabled'">Convertir</button>
        </div>
    </form>
</template>

<style scoped>
    .result {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120px;
        margin: 30px 0;
        overflow: hidden;
        font-size: 32px !important;
        color: #28ab70;
    }

    .result div {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: 0.8s;
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
</style>

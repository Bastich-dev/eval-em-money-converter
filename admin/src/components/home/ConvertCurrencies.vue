<script setup>
    // console.log(new Intl.NumberFormat("de-DE", { style: "currency", currency: "ARS" }).format(number));
    import { onMounted, ref } from "vue";
    import { useToast } from "vue-toastification";
    import { convertCurrencies, listCurrency } from "../../utils/api";
    import mockCurrencies from "../../../../currencies/currencies-list.json";
    import Loading from "../common/Loading.vue";
    const toast = useToast();
    const result = ref(null);
    const currency_1 = ref("");
    const currency_2 = ref("");
    const amount = ref();

    const listCurrencies = ref(null);

    onMounted(async () => {
        // listCurrencies = await listCurrency();
        listCurrencies.value = mockCurrencies;
    });

    function getFormValues() {
        if (
            currency_1.value &&
            currency_2.value &&
            amount.value
            //
        ) {
            result.value = null;
            convertCurrencies({
                currency_1: currency_1.value,
                currency_2: currency_2.value,
                amount: amount.value,
            })
                .then(numberResult => {
                    result.value = [
                        new Intl.NumberFormat("fr-FR", { style: "currency", currency: currency_1.value }).format(amount.value),
                        new Intl.NumberFormat("fr-FR", { style: "currency", currency: currency_2.value }).format(numberResult),
                    ];
                })
                .catch(() => {});
        } else {
            toast.error(`Veuillez choisir un montant ainsi que deux monnaies pour effectuer une conversion.`);
        }
    }
</script>

<template>
    <form v-if="listCurrencies" class="fadeIn card" @submit.prevent="getFormValues">
        <div class="currencies">
            <input v-model="amount" name="amount" type="number" />
            <div class="currency">
                <img src="" />
                <select name="currency_1" v-model="currency_1">
                    <option v-for="currency in listCurrencies">
                        <b>{{ currency.code }}</b>
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
                <select name="currency_2" v-model="currency_2">
                    <option v-for="currency in listCurrencies">
                        <b>{{ currency.code }}</b>
                    </option>
                </select>
            </div>
        </div>
        <div class="result">
            <div v-bind:class="{ animate: !!result }">
                <h2 v-if="result">{{ result[0] }}</h2>
                <span class="material-symbols-outlined"> arrow_right_alt </span>
                <h2 v-if="result">{{ result[1] }}</h2>
            </div>
        </div>
        <div class="actions">
            <span>Les taux de conversions sont purement indicatifs et ne sont pas ceux que vous aurez en échangeant de l'argent.</span>
            <button v-bind:class="{ disabled: !amount || !currency_1 | !currency_2 }">Convertir</button>
        </div>
    </form>
    <div v-else>
        <Loading />
    </div>
</template>

<style scoped>
    .result {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120px;
        margin: 30px 0;
        overflow: hidden;
        font-size: calc(24px + 0.4vw) !important;
        color: var(--primary_color);
    }

    .result div {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    @media (max-width: 875px) {
        .result div {
            flex-direction: column;
        }
    }
    .result div:not(.animate) {
        top: -140px;
        transition: 0s;
    }
    .result div.animate {
        transition: 1s;
        top: 0px;
    }
    .result h2 {
        margin: 0;
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
            color: var(--primary_color);
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
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .currencies > * {
        margin: 20px 10px 0 10px;
    }

    @media (max-width: 875px) {
        .currencies {
            flex-direction: column;
        }
    }

    .currency {
    }

    .currency img {
    }
    .currency b {
    }

    /* actions */
    .actions {
        flex-wrap: wrap;
    }
    .actions span {
        border: 1px solid silver;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        background-color: rgb(206, 243, 231);
        max-width: 350px;
        line-height: 1.5;
        margin: 0 0 20px 10px;
    }
    .actions button {
        border-radius: 50px;
        border: none;
        padding: 12px 75px;
        font-size: 26px;
        margin: 0 auto;
    }
</style>

<script setup>
    import { onMounted, ref, computed } from "vue";
    import { listCurrency } from "../../utils/api";
    import Loading from "../common/Loading.vue";

    const listCurrencies = ref(null);

    onMounted(async () => {
        listCurrencies.value = await listCurrency();
    });
</script>

<template>
    <div class="fadeIn card">
        <h2>Taux de conversions par rapport au $</h2>
        <div>
            <ul>
                <li>
                    <div>Dollar</div>
                    <div></div>
                    <div>Monnaie</div>
                </li>
            </ul>
            <ul>
                <li v-if="listCurrencies" v-for="currency in listCurrencies">
                    <div>$1 Dollar</div>
                    <div>==></div>
                    <div>
                        {{ currency.rate }}
                        {{
                            new Intl.NumberFormat("fr-FR", { style: "currency", currency: currency.code })
                                .format(0)
                                .replaceAll("0,", "")
                                .replaceAll("0", "")
                        }}
                        ( {{ currency.name }})
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>
    h2 {
        margin-bottom: 30px;
    }
    .card {
        margin-top: 80px;
        max-width: 80vw;
    }

    .card > div {
        display: flex;
        flex-direction: column;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .card ul {
        padding: 0px;
        max-width: 80vw;
    }
    .card ul:first-of-type {
        font-weight: bold;
        font-size: 18px;
    }
    .card ul:last-of-type {
        height: 40vh;
    }
    .card ul li {
        display: flex;
        align-items: center;
        border-bottom: 1px solid silver;
        width: min-content;
    }

    .card ul li div {
        padding: 4px;
    }

    .card ul li div:nth-child(1) {
        width: 15%;
    }
    .card ul li div:nth-child(2) {
        width: 30px;
    }
    .card ul li div:nth-child(3) {
        width: 400px;
    }

    @media (max-width: 875px) {
        .card ul li div:nth-child(1) {
            width: 15%;
        }
        .card ul li div:nth-child(2) {
            width: 20px;
            font-size: 8px;
        }
        .card ul li div {
            font-size: 12px !important;
        }
    }
</style>

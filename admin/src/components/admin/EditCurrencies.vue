<script setup>
    import { onMounted, ref, computed, provide } from "vue";
    import { listCurrency } from "../../utils/api";
    import Loading from "../common/Loading.vue";
    import ModalCurrency from "./ModalCurrency.vue";

    const modalData = ref({
        open: false,
        data: null,
        type: null,
    });
    const listCurrencies = ref(null);
    provide("listCurrencies", listCurrencies);
    const search = ref("");
    const renderListCurrencies = computed(() => listCurrencies?.value?.filter(e => e.name.includes(search.value) || e.code.includes(search.value)));

    onMounted(async () => {
        listCurrencies.value = await listCurrency();
    });

    const actionCreate = () => {
        modalData.value = {
            open: true,
            data: null,
            type: "create",
        };
    };

    const actionEdit = data => {
        modalData.value = {
            open: true,
            data,
            type: "edit",
        };
    };

    const actionDelete = data => {
        modalData.value = {
            open: true,
            data,
            type: "delete",
        };
    };
</script>

<template>
    <div class="fadeIn card">
        <div>
            <h1>
                Tableux des monnaies <button @click="actionCreate"><strong>+</strong> Ajouter une monnaie</button>
            </h1>
            <div class="filters">
                <span> Rechercher :</span>
                <input v-model="search" />
            </div>

            <ul>
                <li>
                    <div>Nom</div>
                    <div>Code</div>
                    <div>Taux pour 1$</div>
                    <div>Symbole</div>
                    <div></div>
                </li>
            </ul>
            <ul>
                <li v-if="renderListCurrencies" v-for="currency in renderListCurrencies">
                    <div @click="actionEdit(currency)">{{ currency.name }}</div>
                    <div @click="actionEdit(currency)">{{ currency.code }}</div>
                    <div @click="actionEdit(currency)">{{ currency.rate }}</div>
                    <div @click="actionEdit(currency)">
                        {{
                            new Intl.NumberFormat("fr-FR", { style: "currency", currency: currency.code })
                                .format(0)
                                .replaceAll("0,", "")
                                .replaceAll("0", "")
                        }}
                    </div>
                    <div class="actions">
                        <button class="delete-button" @click="actionDelete(currency)">
                            <span class="material-symbols-outlined"> delete_forever </span>
                        </button>
                    </div>
                </li>
                <div v-else>
                    <Loading :dark="true" />
                </div>
            </ul>
        </div>
    </div>

    <ModalCurrency :listCurrencies="listCurrencies" :modalData="modalData" />
</template>

<style scoped>
    .filters span {
        font-size: 18px;
        font-weight: bold;
        margin-right: 10px;
    }

    h1 {
        margin: 0 0 30px 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 32px;
        flex-wrap: wrap;
    }

    h1 button {
        padding: 6px 30px;
        font-size: 18px;
        margin-top: 10px;
    }
    .card {
        width: 80vw;
        max-width: 1000px;
    }
    .card > div {
        flex-direction: column;
        align-items: flex-start;
    }
    @media (max-width: 1230px) {
        .card > div {
            overflow-x: scroll;
        }
    }

    ul {
        padding: 0;
        width: 1000px;
        margin: 5px;
    }

    ul:first-of-type li div {
        font-weight: bold;
        padding: 10px 0px 10px 4px;
    }
    ul:last-of-type {
        overflow-y: scroll;
        height: 43vh;
    }
    ul:last-of-type li {
        transition: 0.2s;
        cursor: pointer;
    }
    ul:last-of-type li div {
        padding: 10px;
    }

    ul:last-of-type li:hover {
        background-color: var(--primary_light_color);
    }

    ul > div {
        display: flex;
        justify-content: center;
        padding: 10vh 0;
    }

    li {
        border-bottom: 1px solid silver;
        display: flex;
        align-items: center;
    }

    ul li div {
        width: 20%;
        text-align: start;
    }

    ul li div:nth-child(1) {
        width: 30%;
    }
    ul li div:nth-child(5) {
        width: 5%;
    }

    .actions {
        display: flex;
        justify-content: flex-end;
    }

    .actions button {
        padding: 4px 8px;
        font-size: 16px;
        min-width: inherit !important;
    }

    button strong {
        font-size: 28px;
        margin-right: 8px;
    }
    .edit-button {
        margin-left: 5px;
        background-color: #3151b1;
    }

    .edit-button:hover {
        background-color: #122a73;
    }
    .delete-button {
        background-color: #ce2323;
        margin-left: 5px;
    }

    .delete-button:hover {
        background-color: #731212;
    }
</style>

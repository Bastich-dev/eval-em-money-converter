<script setup>
    import { computed, ref } from "vue";
    import { addCurrency, deleteCurrency, editCurrency } from "../../utils/api";

    const props = defineProps({
        modalData: Object,
        listCurrencies: Array,
    });
    const closeModal = () => {
        props.modalData.open = false;
        props.modalData.data = null;
        props.modalData.type = null;
    };
    const tempForm = computed(() => ({ ...props.modalData.data }));

    const fireAction = async () => {
        let newList = [...props.listCurrencies];
        const index = newList.findIndex(e => e.id === props.modalData.data.id);

        switch (props.modalData.type) {
            case "create":
                // const response_create = await addCurrency(tempForm);
                newList.push(tempForm);
                break;
            case "edit":
                // const response_edit = await editCurrency(tempForm.id, tempForm);
                newList[index] = tempForm;
                break;
            case "delete":
                // const response_delete = await deleteCurrency(tempForm.id);
                newList = newList.filter(e => e.id !== props.modalData.data.id);
                break;
            default:
                break;
        }

        props.listCurrencies = newList; // TODO !!!!
        closeModal();
    };
</script>

<template>
    <Modal v-model="modalData.open" :close="closeModal">
        <div class="modal" v-if="modalData.open">
            <h2 v-if="modalData.type === 'create'">Ajouter une monnaie</h2>
            <h2 v-if="modalData.type === 'edit'">Editer une monnaie</h2>
            <h2 v-if="modalData.type === 'delete'">Supprimer cette monnaie ?</h2>

            <div v-if="modalData.type === 'delete'">
                <p><b>Nom :</b> {{ modalData.data.name }}</p>
                <p><b>Code :</b> {{ modalData.data.code }}</p>
                <p>
                    <b>Symbole :</b>
                    {{
                        new Intl.NumberFormat("fr-FR", { style: "currency", currency: modalData.data.code })
                            .format(0)
                            .replaceAll("0,", "")
                            .replaceAll("0", "")
                    }}
                </p>
                <p><b>Taux:</b> 1.1</p>
            </div>

            <div v-if="modalData.type === 'create' || modalData.type === 'edit'">
                <label>Nom :</label>
                <input v-model="tempForm.name" />
                <label>Code :</label>
                <input v-model="tempForm.code" />
                <!-- <label>Symbole :</label>
                <input :disabled="true" v-model="tempForm.name" /> -->
                <label>Taux :</label>
                <input v-model="tempForm.name" />
            </div>

            <div class="actions">
                <button @click="closeModal">Retour</button>
                <button v-if="modalData.type === 'create'" @click="fireAction">Ajouter</button>
                <button v-if="modalData.type === 'edit'" @click="fireAction">Modifier</button>
                <button v-if="modalData.type === 'delete'" @click="fireAction">Supprimer</button>
            </div>
        </div>
        <!-- <div class="modal">
            <h2>Supprimer cette monnaie ?</h2>
            <p>Nom : Euro</p>
            <p>Symbole : €</p>
            <p>Taux: 1.1</p>
            <div>
                <button @click="closeModal">Retour</button>
                <button @click="closeModal">Supprimer</button>
            </div>
        </div> -->
    </Modal>
</template>

<style scoped>
    .modal {
        width: 100%;
        max-width: 600px;
        padding: 30px;
        box-sizing: border-box;
        background-color: #fff;
        font-size: 20px;
        text-align: center;
        color: black;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
    }
    .modal h2 {
        margin-bottom: 30px;
    }

    input {
        font-size: 18px;
    }
    .modal label {
        text-align: left;
        margin-top: 20px;
        font-weight: bold;
        margin-bottom: 4px;
    }

    .modal > div {
        display: flex;
        flex-direction: column;
    }

    .modal p {
        margin: 8px 0;
    }

    .actions {
        margin-top: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: row !important;
        flex-wrap: wrap;
    }

    @media (max-width: 875px) {
        .actions {
            justify-content: center;
        }
    }

    .actions > * {
        margin-bottom: 10px;
    }
    .modal button {
        padding: 10px 25px;
    }

    .modal button:first-child {
        background-color: #666666;
    }
    .modal button:first-child:hover {
        background-color: #111111;
    }
</style>

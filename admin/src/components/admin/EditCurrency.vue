<script>
    import { defineComponent, ref } from "vue";
    export default defineComponent({
        setup() {
            const isShow = ref(false);

            function showModal() {
                isShow.value = true;
            }

            function closeModal() {
                isShow.value = false;
            }

            return {
                isShow,
                showModal,
                closeModal,
            };
        },
    });
</script>

<template>
    <section>
        <div class="card">
            <div>
                <h1>
                    Tableux des monnaies <button @click="showModal"><strong>+</strong> Ajouter une monnaie</button>
                </h1>

                <ul>
                    <li>
                        <div>Nom</div>
                        <div>Symbole</div>
                        <div>Taux</div>
                        <div></div>
                    </li>
                    <li>
                        <div>Euro</div>
                        <div>€</div>
                        <div>1.1</div>
                        <div class="actions">
                            <button class="edit-button" @click="showModal"><span class="material-symbols-outlined"> edit_note </span></button>
                            <button class="delete-button" @click="showModal"><span class="material-symbols-outlined"> delete_forever </span></button>
                        </div>
                    </li>
                    <li>
                        <div>Euro</div>
                        <div>€</div>
                        <div>1.1</div>
                        <div class="actions">
                            <button class="edit-button" @click="showModal"><span class="material-symbols-outlined"> edit_note </span></button>
                            <button class="delete-button" @click="showModal"><span class="material-symbols-outlined"> delete_forever </span></button>
                        </div>
                    </li>
                    <li>
                        <div>Euro</div>
                        <div>€</div>
                        <div>1.1</div>
                        <div class="actions">
                            <button class="edit-button" @click="showModal"><span class="material-symbols-outlined"> edit_note </span></button>
                            <button class="delete-button" @click="showModal"><span class="material-symbols-outlined"> delete_forever </span></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <Modal v-model="isShow" :close="closeModal">
            <div class="modal">
                <h2>Editer une monnaie</h2>
                <label>Nom</label>
                <input />
                <label>Symbole</label>
                <input />
                <label>Taux</label>
                <input />

                <div>
                    <button @click="closeModal">Retour</button>
                    <button @click="closeModal">Enregistrer</button>
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
    </section>
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
    .modal label {
        text-align: left;
        margin-top: 20px;
    }
    .modal > div {
        margin-top: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
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

    h1 {
        margin: 0 0 30px 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 32px;
    }

    h1 button {
        padding: 6px 30px;
        font-size: 18px;
    }
    .card {
        width: 100vw;
        max-width: 800px;
    }
    .card > div {
        flex-direction: column;
        align-items: flex-start;
    }

    ul {
        width: -webkit-fill-available;
        padding: 0;
    }
    li:first-child div {
        font-weight: bold;
    }
    li {
        border-bottom: 1px solid silver;
        display: flex;
        align-items: center;
    }

    ul li div {
        width: 25%;
        text-align: start;
        padding: 10px;
    }

    .actions {
        display: flex;
        justify-content: flex-end;
    }

    button {
        padding: 4px 8px;
        font-size: 16px;
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

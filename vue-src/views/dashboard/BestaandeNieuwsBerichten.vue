<template>
    <Modal v-for="item in UserData" v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            <p>Naam: {{ item.name }} {{ item.surname }}</p>
        </template>
        <template v-slot:body>
            <p>Adres: {{ item.address.address }}</p>
            <p>Postcode: {{ item.address.postal_code }}</p>
            <p>Woonplaats: {{ item.address.residence }}</p>
            <p>Email: {{ item.email }}</p>
            <p>Telefoonnummer:{{ item.address.phone }}</p>
            <p>Geboortedatum: {{ item.date_of_birth }}</p>
            <p>Geslacht: {{ item.gender }}</p>
        </template>
    </Modal>
    <table class="table">
        <p v-if="FormData.length < 1"> Er zijn geen nieuwsberichten </p>
        <thead v-if="FormData.length > 0">
        <tr>
            <th scope="col">id</th>
            <th scope="col">tekst</th>
        </tr>
        </thead>
        <tbody v-for="item in FormData">
        <tr>
            <td>{{ item.id }}</td>
            <td><span v-html="item.news_text_stripped"></span></td>
            <td><button v-on:click="deleteNieuws(item.id)">Verwijder</button></td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import Modal from '@/views/lidWorden/components/Modal.vue'

export default {
    data() {
        return {
            isModalVisible: false,
            FormData: [{}],
            UserData: {},
            imgHeader: "",
        }
    },
    methods: {
         deleteNieuws(id) {
            this.axios.delete('/v1/office/news/' + id);
            this.$router.go();

        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
    },
    components: {
        Modal
    },
    async created() {
        this.FormData = (await this.axios.get('/v1/office/news')).data;
    },
}

</script>

<style scoped>
.table {
    color: white
}
</style>

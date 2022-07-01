<template>
    <Modal v-for="item in MessageData" v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            <p>Naam verzender: {{ item.name }}</p>
            <p>Email verzender: {{ item.email }}</p>
            <p>Telefoonnummer verzender: {{ item.phone }}</p>
        </template>
        <template v-slot:body>
            <p>Onderwerp: {{ item.subject }}</p>
            <p>Bericht: {{ item.message }}</p>
        </template>
    </Modal>
    <table class="table">
        <p v-if="FormData.length < 1"> Er zijn geen berichten </p>
        <thead v-if="FormData.length > 0">
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Emailadres</th>
                <th scope="col">Telefoonnummer</th>
                <th scope="col">Onderwerp</th>
                <th scope="col">Verzonden</th>
            </tr>
        </thead>
        <tbody v-for="item in FormData" v-if="FormData.length > 0">
            <tr>
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.phone }}</td>
                <td>{{ item.subject }}</td>
                <td>{{ item.created_at }}</td>
                <td><button v-on:click="showMessage(item.id)">Open</button></td>
                <td><button v-on:click="deleteMessage(item.id)">Verwijder</button></td>
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
            MessageData: {},
            imgHeader: "",
        }
    },
    methods: {
        deleteMessage(id) {
            this.axios.get('/v1/contact/delete/' + id);
            this.$router.go();
        },
        async showMessage(id) {
            this.MessageData = (await this.axios.get('/v1/contact/show/' + id)).data;
            await this.showModal();
            console.log(this.MessageData)
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
        this.FormData = (await this.axios.get('/v1/contact/get')).data;
        console.log(this.FormData);
    },

}

</script>

<style scoped>
.table {
    color: white
}
</style>
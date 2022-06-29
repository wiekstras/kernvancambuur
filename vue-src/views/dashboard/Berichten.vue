<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Emailadres</th>
                <th scope="col">Telefoonnummer</th>
                <th scope="col">Onderwerp</th>
                <th scope="col">Verzonden</th>
            </tr>
        </thead>
        <tbody v-for="item in FormData">
            <tr>
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.phone }}</td>
                <td>{{ item.subject }}</td>
                <td>{{ item.created_at }}</td>
                <td><button onclick="removeDummy()">Open</button></td>
                <td><button  v-on:click="deleteMessage">Verwijder</button></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            FormData: [{}],
            imgHeader: "",
        }
    },
    methods: {
        deleteMessage() {
            this.axios.get('/v1/contact/delete/2')
        }
    },
    async created() {
        this.FormData = (await this.axios.get('/v1/contact/get')).data;
    },

}

</script>

<style scoped>
.table {
    color: white
}
</style>
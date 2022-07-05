<template>
    <div class="container-fluid">
        <h1>Bestaande nieuwsberichten</h1>
        <table class="table">
            <p v-if="FormData.length < 1"> Er zijn geen nieuwsberichten </p>
            <thead v-if="FormData.length > 0">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titel</th>
            </tr>
            </thead>
            <tbody v-for="item in FormData">
            <tr>
                <td>{{ item.id }}</td>
                <td><span v-html="item.news_title"></span></td>
                <td><button v-on:click="deleteNieuws(item.id)" class="btn btn-danger rounded-2" type="button">Verwijder</button></td>
                <td><button v-on:click="editNieuws(item.id)" class="btn btn-warning rounded-2" type="button">Bewerken</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

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
        editNieuws(id){
             this.$router.push(`/dashboard/nieuws-bericht/${id}`)
        }
    },
    components: {
    },
    async created() {
        this.FormData = (await this.axios.get('/v1/office/news')).data;
    },
}

</script>

<style scoped>
</style>

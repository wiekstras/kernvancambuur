<template>
<div class="container bg-white rounded-1">
    <h1>Kern van Cambuur nieuws</h1>
    <img :src="FormData.news_image_path" class="img-fluid" alt="nieuws image">
    <span class="ck-content " v-html="FormData.news_text"></span>
</div>
</template>

<script>
export default {
    name: "nieuwsBerichtenDetail",
    data() {
        return {
            FormData: {},
            imgHeader: "",
        }
    },
    async created() {
        const routeId = this.$route.params.id;
        this.FormData = (await this.axios.get(`/v1/office/news/${routeId}`)).data;
        console.log(this.FormData)
    }
}
</script>

<style scoped>

</style>

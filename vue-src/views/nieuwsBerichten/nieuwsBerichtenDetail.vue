<template>
<div class="container bg-white rounded-1">
    <img src="@/assets/pieterbos.jpeg" alt="">
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
        this.FormData = (await this.axios.get('/v1/news/latest')).data;
    }
}
</script>

<style scoped>

</style>

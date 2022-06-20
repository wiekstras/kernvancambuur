<template>
<div class="container bg-white rounded-1">
    <span class="ck-content " v-html="blogFormData.blog_text"></span>
</div>
</template>

<script>
export default {
    name: "nieuwsBerichtenDetail",
    data() {
        return {
            blogFormData: {},
            imgHeader: "",
        }
    },
    async created() {
        this.blogFormData = (await this.axios.get('/v1/promolot-blog/latest')).data;
    }
}
</script>

<style scoped>

</style>

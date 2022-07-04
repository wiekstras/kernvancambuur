<template>
    <template v-for="nieuws in nieuwsberichtenData">
        <div class="col-md-6">
        <router-link :to="`/nieuws-berichten/${nieuws.id}`">
            <div class="card mb-3">
                <img :src="nieuws.news_image_path" class="card-img-top" alt="nieuws image">
                <div class="card-body">
                    <span v-html="nieuws.news_text_stripped" class="card-title">
                    </span>
                </div>
            </div>
        </router-link>
        </div>
    </template>
</template>

<script>
export default {
    name: "nieuwsbericht",
    props: {
        nieuwsberichtenData: {},
    },
    created() {
    }
}
</script>

<style scoped>
a {
    text-decoration: none;
}
</style>

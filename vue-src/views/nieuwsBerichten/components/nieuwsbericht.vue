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


    <!--    <div class="py-1">-->
    <!--        <div-->
    <!--            class="bg-white rounded shadow-md lg:w-70  cursor-pointer">-->
    <!--            <div class="aspect-w-16 aspect-h-9">-->
    <!--                <img-->
    <!--                    alt="Lottery image"-->
    <!--                    src="https://via.placeholder.com/400x300"-->
    <!--                    class="rounded-t-md"/>-->
    <!--            </div>-->
    <!--            <div class="px-5 py-3">-->
    <!--                <h2 class="text-1xl font-semibold">test</h2>-->
    <!--                <p class="text-gray-500 text-xs ">test2</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
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

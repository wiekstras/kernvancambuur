<template v-if="this.loaded">
    <h2>Headlines</h2>
    <div style="border: 1;">
        <ul>
            <li v-for="(nieuws, index) in nieuwsberichtenData.slice(0,4)" style="list-style: none; margin: inherit;">
            <router-link :to="`/nieuws-berichten/${nieuws.id}`">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid" :src="nieuws.news_image_path" style="width:100%" />
                    </div>
                    <div class="col">
                        <div class="row">
                           <span v-html="nieuws.news_title "></span>
                        </div>
                        <div class="row">
                            <span v-html="nieuws.publish_date"></span>
                        </div>
                    </div>
                </div>
                </router-link>
            </li>
        </ul>
    </div>
</template>

<style scoped>
.over-ons h2 {
    color: #FAE300 !important;
    text-shadow: 0px 1px 2px black;
}

.over-ons ul {
    padding: 0px;
}
</style>

<script>
export default {
    data() {
        return {
            nieuwsberichtenData: [{}],
            loaded: false,
        }
    },
    async created() {
        this.nieuwsberichtenData = (await this.axios.get('/v1/office/news')).data
        this.loaded = true;
        console.log(this.nieuwsberichtenData);
    },
}
</script>

<template v-if="this.loaded">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-9">
                <div class="row">
                        <nieuwsbericht :nieuwsberichtenData="nieuwsberichtenData" />
                </div>
            </div>
            <div class="col-sm-3">
                <HeadlinesComponent/>
            </div>
        </div>
    </div>
</template>

<script>
import HeadlinesComponent from '../../components/HeadlinesComponent.vue';
import nieuwsbericht from "./components/nieuwsbericht.vue"
import sidebar from "./components/sidebar.vue"
import headlines from "./components/headlines.vue"

export default {
    name: "index",
    components: {
        nieuwsbericht,
        sidebar,
        headlines,
        HeadlinesComponent
    },
    data() {
        return {
            nieuwsberichtenData: {},
            loaded: false,
        }
    },
    async created() {
        this.nieuwsberichtenData = (await this.axios.get('/v1/office/news')).data
        this.loaded = true;
        console.log(this.nieuwsberichtenData);
    }
}
</script>

<style scoped>
</style>

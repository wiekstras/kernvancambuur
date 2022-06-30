<template v-if="this.loaded">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-9">
                        <nieuwsbericht :nieuwsberichtenData="nieuwsberichtenData"/>

            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</template>

<script>
import nieuwsbericht from "./components/nieuwsbericht.vue"
import sidebar from "./components/sidebar.vue"
import headlines from "./components/headlines.vue"

export default {
    name: "index",
    components: {
        nieuwsbericht,
        sidebar,
        headlines,
    },
    data() {
      return{
          nieuwsberichtenData: {},
          loaded: false,
      }
    },
    async created(){
        this.nieuwsberichtenData = (await this.axios.get('/v1/office/news')).data
        this.loaded = true;
        console.log(this.nieuwsberichtenData);
    }
}
</script>

<style scoped>

</style>

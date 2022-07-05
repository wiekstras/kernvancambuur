<template>
    <h2 class="d-flex justify-content-center mt-3 mb-0 justify-content-md-start">Sfeeracties</h2>
    <p class="d-flex fw-bold justify-content-start mb-1 text-danger ">Sfeeracties worden nooit aangekondigd</p>
    <div class="row d-md-none d-lg-flex">
        <div v-for="(item, index) in this.eventPictures" class="col-3">
            <img v-if="index < 4" class="img-fluid" :src="item.image">
        </div>
    </div>
    <div class="mb-4"></div>

    <img class="d-none" v-for="(item, index) in items" :key="index" :src="item.image" :alt="alt"/>
    <p class="d-flex justify-content-start mb-4 yellow">
        <b>Sfeerteam KVC, onderdeel van de Kern van Cambuur, verzorgt dus al met al inmiddels 6 jaar lang
        diverse sfeer-/tifoacties bij thuiswedstrijden in ons eigen Cambuurstadion. Sfeerteam KVC maakt span,- en
        publieksdoeken 'ambachtelijk', dus met de hand met druppels bier en zweet.</b>
    </p>
</template>

<script>

export default {
    data() {
        return {
            eventPictures: {},
        }
    },
    async created() {
        this.eventPictures = (await this.axios.get('/v1/dashboard/sfeeracties')).data.message
        console.log(this.eventPictures[0].image)
    },
    name: "DescriptionComponent"
}
</script>

<style scoped>
.desc img {
    margin-right:10px;
}

h2 {
    color:rgb(250, 227, 0) !important;
}

</style>

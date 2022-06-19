<template>
    <h2 class="d-flex justify-content-center mt-3 mb-0 justify-content-md-start">Sfeeracties</h2>
    <p class="d-flex fw-bold justify-content-start mb-1 text-danger ">Sfeeracties worden nooit aangekondigd</p>
    <img src="../assets/sfeer.jpg" alt="">
    <img src="../assets/sfeer2.jpg" alt="">
    <img src="../assets/sfeer3.jpg" alt="">
    <img src="../assets/sfeer4.jpg" alt="">
    <div class="mb-4"></div>

    <img class="d-none" v-for="(item, index) in items" :key="index" :src="item.image" :alt="alt"/>
    <p class="d-flex justify-content-start mb-4">
        Sfeerteam KVC, onderdeel van de Kern van Cambuur, verzorgt dus al met al inmiddels 6 jaar lang
        diverse sfeer-/tifoacties bij thuiswedstrijden in ons eigen Cambuurstadion. Sfeerteam KVC maakt span,- en
        publieksdoeken 'ambachtelijk', dus met de hand met druppels bier en zweet.
    </p>
</template>

<script>
import Image from "../assets/sfeer.jpg"
import Image1 from "../assets/sfeer1.jpg"
import Image2 from "../assets/sfeer2.jpg"
import Image3 from "../assets/sfeer3.jpg"
import Image4 from "../assets/sfeer4.jpg"

export default {
    data() {
        return {
            alt: 'sfeeractie',
            items: [
                {image: Image},
                {image: Image1},
                {image: Image2},
                {image: Image3},
                {image: Image4}],
        }
    },
    name: "DescriptionComponent"
}
</script>

<style scoped>
.desc img {
    margin-right:10px;
}
</style>

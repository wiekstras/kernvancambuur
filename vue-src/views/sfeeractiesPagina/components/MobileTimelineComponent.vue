<template>
    <div v-for="(item, index) in items" :key="index" class="card mb-2 mt-2">
        <img alt="Sfeeractiefoto" :src="item.Image" :id=index class="card-img-top"/>
        <div class="card-body">
            <p class="card-text">{{item.Date}}</p>
            <p class="card-text">{{item.Description}}</p>
        </div>
    </div>
</template>

<script>
import Image from "../assets/sfeer-full.jpg"
import Image1 from "../assets/sfeer-1-full.jpg"
import Image2 from "../assets/sfeer-2-full.jpg"
import Image3 from "../assets/sfeer-3-full.jpg"

export default {
    data() {
        return {
            items: [
                {
                    Image: Image,
                    Date: "11-05-2022",
                    Description: "Dit was echt een enge sfeeractie iedereen ging bier drinken en helemaal los met spandoeken enzo"
                },
                {
                    Image: Image1,
                    Date: "11-02-2022",
                    Description: "Dit was een super sfeeractie waar we allemaal stiekem vuurwerk het stadion gingen binnensmokkelen en afsteken"
                },
                {
                    Image: Image2,
                    Date: "14-01-2022",
                    Description: "We mochten geen vuurwerk meenemen in het stadion maar we deden het toch en kijk het resultaat van de sfeeractie!!"
                },
                {
                    Image: Image3,
                    Date: "19-07-2022",
                    Description: "Bij deze sfeeractie gingen lieten we vlaggen maken in verschillende vormen. De kleur moest wel hetzelfde zijn want we zijn voor cambuur."
                }
            ]
        }
    },
    name: "MobileTimelineComponent"
}
</script>

<style scoped>

</style>

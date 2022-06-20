<template>
    <div v-for="(item, index) in items" class="row mb-lg-4">
        <div v-if="index % 2 === 0" class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <img alt="Sfeeractiefoto" :src="item.Image" :id=index class="img-fluid rounded"/>
                </div>
                <div class="col-lg-6">
                    <p class="fw-bold">{{item.Date}}</p>
                    <p>{{item.Description}}</p>
                </div>
            </div>
        </div>
        <div v-else class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-bold">{{item.Date}}</p>
                    <p>{{item.Description}}</p>
                </div>
                <div class="col-lg-6">
                    <img alt="Sfeeractiefoto" :src="item.Image" :id=index class="img-fluid rounded"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Image from "../assets/sfeer-full.jpg";
import Image1 from "../assets/sfeer-1-full.jpg";
import Image2 from "../assets/sfeer-2-full.jpg";
import Image3 from "../assets/sfeer-3-full.jpg";

export default {
    data() {
        return {
            items: [
                {
                    Image: Image,
                    Date: "11-05-2022",
                    Description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                },
                {
                    Image: Image1,
                    Date: "11-02-2022",
                    Description: "DiLorem Ipsum is simply unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.t was een super sfeeractie waar we allemaal stiekem vuurwerk het stadion gingen binnensmokkelen en afsteken"
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
    name: "DesktopTimelineComponent"
}
</script>

<style scoped>
 p {
    color:#fff;
 }
</style>

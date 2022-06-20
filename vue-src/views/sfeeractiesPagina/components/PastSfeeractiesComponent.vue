<template>
    <h2 class="d-flex mb-3 mt-3">Afgelopen Sfeeracties</h2>
    <div class="list-group">
        <div @click="scroll(index)" v-for="(item, index) in items" :key="index" class="list-group-item flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <p class="m-0">{{item.sfeeractieTitle}}</p>
                <p class="m-0">{{item.date}}</p>
                <img src="../assets/IconArrowRight.svg" alt="">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        scroll(id) {
            document.getElementById(id).scrollIntoView({
                behavior: "smooth"
            });
        }
    },
    data() {
        return {
            items: [
                {sfeeractieTitle: "Papierinzameling 2022", date: "1-12-2021 19:05"},
                {sfeeractieTitle: "Cambuur komt eraan", date: "21-09-2022 13:05"},
                {sfeeractieTitle: "Vlaggen Actie", date: "21-07-2022 15:05"},
                {sfeeractieTitle: "Cambuur vs Heerenveen", date: "21-10-2022 17:05"}
            ]
        }
    },
    name: "PastSfeeractiesComponent"
}
</script>

<style scoped>
h2 {
    color:rgb(250, 227, 0) !important;
}

.list-group {
   cursor:pointer;
}


</style>

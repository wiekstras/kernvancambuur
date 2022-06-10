<template>
    <h1 class="d-flex justify-content-center mb-2 mt-2">Afgelopen Sfeeracties</h1>
    <div class="list-group">
        <div @click="scroll(index)" v-for="(item, index) in items" :key="index" class="list-group-item flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <p class="m-0">{{item.sfeeractieTitle}}</p>
                <p class="m-0">{{item.date}}</p>
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
                {sfeeractieTitle: "papierinzameling 2022", date: "1-12-2021 19:05"},
                {sfeeractieTitle: "cambuur komt eraan", date: "21-09-2019 11:05"},
                {sfeeractieTitle: "vlaggen actie", date: "21-07-2022 11:05"},
                {sfeeractieTitle: "cambuur vs heerenveen", date: "21-10-2022 11:05"}
            ]
        }
    },
    name: "PastSfeeractiesComponent"
}
</script>

<style scoped>
</style>

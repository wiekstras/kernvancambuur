<template>
    <h1 class="d-flex justify-content-center mb-2 mt-2">Afgelopen Sfeeracties</h1>
    <ul class="list-group">
        <li class="d-flex list-group-item" v-for="(item, index) in items" :key="index">
            <p class="m-0">{{item.sfeeractieTitle}}</p>
            <p class="d-block my-auto mx-auto">{{item.date}}</p>
            <img @click="scroll(index)" src="../assets/IconArrowRight.svg" alt="sfeeractiefoto">
        </li>
    </ul>
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
                {sfeeractieTitle: "sfeeractie 1", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 2", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 3", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 4", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 5", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 6", date: "21-5-2022 11:05"},
                {sfeeractieTitle: "sfeeractie 7", date: "21-5-2022 11:05"},
            ]
        }
    },
    name: "PastSfeeractiesComponent"
}
</script>

<style scoped>

</style>

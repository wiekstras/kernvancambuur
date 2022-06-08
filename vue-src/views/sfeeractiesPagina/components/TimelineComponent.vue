<template>
    <h1 class="d-flex justify-content-center mb-2 mt-2">Tijdlijn</h1>
    <!-- Desktopview -->
    <div class="d-none">
        <div v-for="(item, index) in items" :key="index">
            <div v-if="index % 2 === 0">
                <img :src="item.Image" alt="sfeeractiefoto" />
                <p>{{item.Date}}</p>
                <p>{{item.Description}}</p>
                <p>{{item.Date}}</p>
            </div>
            <div v-if="index % 2 !== 0">
                <p>{{item.Date}}</p>
                <p>{{item.Description}}</p>
                <img :src="item.Image" alt="sfeeractiefoto"/>
                <p>{{item.Date}}</p>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <MobileTimelineComponent/>
</template>

<script>
import MobileTimelineComponent from "./MobileTimelineComponent.vue";

export default {
    name: "TimelineComponent",
    components: {MobileTimelineComponent}
}
</script>

<style scoped>

</style>

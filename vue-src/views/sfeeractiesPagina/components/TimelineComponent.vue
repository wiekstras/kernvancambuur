<template>
    <h2 class="d-flex mb-4 mt-2 yellow">Tijdlijn</h2>
    <!-- Desktop View -->

    <div class="d-none d-lg-block">
        <DesktopTimelineComponent :posts="posts"/>
    </div>

    <!-- Mobile View -->
    <div class="d-lg-none">
        <MobileTimelineComponent :posts="posts"/>
    </div>
</template>

<script>
import MobileTimelineComponent from "./MobileTimelineComponent.vue";
import DesktopTimelineComponent from "./DesktopTimelineComponent.vue";

export default {
    name: "TimelineComponent",
    data() {
        return {
            posts: {},
        }
    },
    async created() {
        this.posts = (await this.axios.get('/v1/dashboard/sfeeracties')).data.message
        console.log(this.posts);
    },
    components: 
    {
        DesktopTimelineComponent, 
        MobileTimelineComponent
    }
}
</script>

<style scoped>
 h2 {
    color:rgb(250, 227, 0)!important;
 }
</style>

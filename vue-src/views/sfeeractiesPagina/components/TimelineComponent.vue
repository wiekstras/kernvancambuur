<template>
    <h1 class="d-flex justify-content-center mb-2 mt-2">Tijdlijn</h1>
    <!-- Desktop View -->

    <div class="d-none d-lg-block">
        <DesktopTimelineComponent/>
    </div>

    <!-- Mobile View -->
    <div class="d-lg-none">
        <MobileTimelineComponent/>
    </div>
</template>

<script>
import MobileTimelineComponent from "./MobileTimelineComponent.vue";
import DesktopTimelineComponent from "./DesktopTimelineComponent.vue";

export default {
    name: "TimelineComponent",
    components: {DesktopTimelineComponent, MobileTimelineComponent}
}
</script>

<style scoped>

</style>

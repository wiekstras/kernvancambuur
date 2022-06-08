<template>
    <div class="row">
        <div class="col-12">
            <DescriptionComponent/>
        </div>
        <div class="col-12">
            <PastSfeeractiesComponent/>
        </div>
        <div class="row">
            <div class="col-12">
                <TimelineComponent/>
            </div>
        </div>
    </div>
</template>

<script>
import DescriptionComponent from "./components/DescriptionComponent.vue"
import PastSfeeractiesComponent from "./components/PastSfeeractiesComponent.vue";
import TimelineComponent from "./components/TimelineComponent.vue";

export default {
name: "sfeeractiesPage",
    components: {PastSfeeractiesComponent, DescriptionComponent, TimelineComponent}
}
</script>

<style scoped>

</style>

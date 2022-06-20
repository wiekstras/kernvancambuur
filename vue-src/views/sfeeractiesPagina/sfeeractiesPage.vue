<template>
    <div class="sfeeracties">
      <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 col-xxl-8 desc">
                <DescriptionComponent />
            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xxl-4">
                <PastSfeeractiesComponent />
            </div>
            <div class="col-12">
                <TimelineComponent />
            </div>
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
    components: { PastSfeeractiesComponent, DescriptionComponent, TimelineComponent }
}
</script>

<style scoped>
.sfeeracties {
    padding: 34px 0px;
}

h2 {
    font-size: 35px;
}
</style>

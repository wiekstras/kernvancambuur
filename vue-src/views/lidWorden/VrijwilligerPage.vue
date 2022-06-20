<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <LidWordenForm/>
            </div>
        </div>
    </div>
    <TheFooter/>
</template>

<script>
import TheFooter from "@/components/TheFooter.vue";
import LidWordenForm from "./components/VrijwilligerForm.vue";
export default {
    name: "VrijwilligerPage",
    components: {TheFooter, LidWordenForm}
}
</script>

<style scoped>

</style>

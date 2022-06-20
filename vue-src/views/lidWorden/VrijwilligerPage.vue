<template>
 <div class="vrijwilliger">
     <div class="container">
        <div class="row">
            <div class="col-12">
                <LidWordenForm/>
            </div>
        </div>
    </div>
 </div>
   
</template>

<script>
import LidWordenForm from "./components/VrijwilligerForm.vue";
export default {
    name: "VrijwilligerPage",
    components: {LidWordenForm}
}
</script>

<style scoped>
.vrijwilliger {
    padding: 38px 0px;
}
</style>

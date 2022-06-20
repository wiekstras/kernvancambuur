<template>
    <div class="donateur">
        <DonateurForm/>
    </div>
    
</template>

<script>
import DonateurForm from "./components/DonateurForm.vue";
export default {
    name: "DonateurPage",
    components: {DonateurForm}
}
</script>

<style scoped>
.donateur {
    padding: 38px 0px;
}

</style>

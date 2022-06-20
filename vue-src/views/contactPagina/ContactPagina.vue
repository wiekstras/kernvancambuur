<template>
    <div class="contact">
        <ContactForm />
    </div>
</template>

<style scoped>
 .contact {
    padding:38px 0px;
 }
</style>

<script>
import ContactForm from "./components/ContactForm.vue";

export default {
    components: { ContactForm }
}
</script>
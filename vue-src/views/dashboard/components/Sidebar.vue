<template>
    <div class="row mt-lg-2 mb-2">
        <h3 class="sidebar-title m-0">KVC Dashboard</h3>
    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Sfeeracties</p>
        <router-link to="/dashboard/nieuw-bericht">Toevoegen</router-link>
        <p>Bestaand</p>
    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Nieuws</p>
        <p>Toevoegen</p>
        <p>Bestaand</p>
    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Leden</p>
        <p>donateurs</p>
        <p>vrijwilligers</p>
        <p>nieuwe aanmeldingen</p>
    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Contact</p>
        <p>berichten</p>
    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Account</p>
        <p>mijn account</p>
        <p>gebruikers</p>
    </div>
</template>

<script>
export default {
    name: "Sidebar"
}
</script>

<style scoped>
.sidebar-title, .options{
    color: white !important;
}

.title {
    font-weight: bold
}

p {
    margin: 0;
}
</style>

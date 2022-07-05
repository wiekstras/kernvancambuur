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
        <router-link to="/dashboard/nieuws-bericht">Toevoegen</router-link>
        <router-link to="/dashboard/nieuws-bericht-bestaand">Bestaand</router-link>

    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Leden</p>
        <router-link to="/dashboard/donateurs">Donateurs</router-link>
        <router-link to="/dashboard/vrijwilligers">Vrijwilligers</router-link>
        <router-link to="/dashboard/nieuwe-aanmeldingen">Nieuwe aanmeldingen</router-link>

    </div>
    <div class="row mt-lg-5 options">
        <p class="title mb-2">Contact</p>
        <router-link to="/dashboard/berichten">Berichten</router-link>
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

<template>
    <div class="row mt-lg-2 mb-2">
        <h3 class="sidebar-title m-0">KVC Dashboard</h3>
    </div>
        <div class="row mt-lg-5 options">
            <p>Nieuw bericht</p>
            <p>donateurs</p>
            <p>vrijwilligers</p>
            <p>nieuwe aanmeldingen</p>
            <p>nieuwe berichten</p>
        </div>
        <div class="row mt-lg-5 options">
            <p>Mijn account</p>
            <p>gebruikers</p>
            <p>instellingen</p>
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

p {
    margin: 0px;
}
</style>

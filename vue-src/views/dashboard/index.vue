<template>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar location -->
            <div class="col-lg-2 sidebar-location">
                <Sidebar/>
            </div>
            <!-- Content -->
            <div class="col-lg-10">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue'
export default {
    name: "index",
    components: {Sidebar}
}
</script>

<style scoped>
.row {
    
}
.sidebar-location {
    background: #1a202c;
    overflow-x: scroll;
    height: 100vh;
}
</style>

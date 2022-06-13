<template>
    <Navbar></Navbar>
    <div class="container-fluid">
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue'

export default{
    name: "Kernvancambuur",
    components: {
        Navbar,
    },
    created(){
        this.authStore.setAxios(this.axios);
    }
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

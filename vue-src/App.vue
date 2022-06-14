<template>
    <Navbar></Navbar>
        <router-view></router-view>
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

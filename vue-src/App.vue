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
   font-family: fantasy;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

#app h2,h3,h4,h5,h6 {
    color: #246DB9;
}

</style>

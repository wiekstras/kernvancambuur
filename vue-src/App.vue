<template>
    <Navbar></Navbar>
   <router-view></router-view>
</template>

<script>
import Navbar from '@/components/Navbar.vue'

export default{
    components: {
        Navbar,
    },
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

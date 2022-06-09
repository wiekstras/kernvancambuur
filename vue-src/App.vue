<template>
    <Navbar></Navbar>
    <div class="container-fluid">
        <router-view></router-view>
    </div>
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

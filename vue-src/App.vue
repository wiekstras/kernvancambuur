<template>
    <Navbar></Navbar>
        <router-view></router-view>
    <Footer></Footer>
</template>

<script>
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/TheFooter.vue'

export default{
    name: "Kernvancambuur",
    components: {
        Navbar, Footer
    },
    created(){
        this.authStore.setAxios(this.axios);
    }
}

</script>

<style>
#app {
  font-family: system-ui;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

#app h2,h3,h4,h5,h6 {
    color: #246DB9;
}

</style>

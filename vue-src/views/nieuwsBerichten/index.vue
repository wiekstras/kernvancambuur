<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-9">
                <nieuwsbericht/>
                <div class="row">
                    <div class="col-sm-6">
                        <nieuwsbericht/>
                    </div>
                    <div class="col-sm-6">
                        <nieuwsbericht/>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</template>

<script>
import nieuwsbericht from "./components/nieuwsbericht.vue"
import sidebar from "./components/sidebar.vue"
import headlines from "./components/headlines.vue"

export default {
    name: "index",
    components: {
        nieuwsbericht,
        sidebar,
        headlines,
    }
}
</script>

<style scoped>

</style>

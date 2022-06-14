<template>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <nieuwsbericht/>
                    </div>
                    <nieuwsbericht/>
                    <nieuwsbericht/>
                    <nieuwsbericht/>
                    <nieuwsbericht/>
                </div>
            </div>
            <div class="">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only">Zoeken</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Zoeken naar nieuwsberichten" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Zoeken</button>
                    </div>
                </form>
                <div class="pl-3">
                    <p class="text-2xl font-semibold">Headlines</p>
                    <headlines/>
                    <headlines/>
                    <headlines/>
                    <headlines/>
                </div>
                <div class="pl-3">
                    <p class="text-2xl font-semibold">Archief</p>

                </div>
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

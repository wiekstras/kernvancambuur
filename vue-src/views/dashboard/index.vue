<template>
    <DataTable :columns="this.columns" :data="this.data"/>
</template>

<script>
import DataTable from "@/components/DataTable.vue";

export default {
    name: "index",
    components: {
      DataTable,
    },
    data() {
        return {
            columns: [{
                name: 'Blog tekst',
                attribute: 'blog_text_stripped',
                sortable: true,
            },{
                name: 'Blog tekst',
                attribute: 'blog_image_path',
                sortable: true,
            }],
            data: [{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            },{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            },{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            },{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            },{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            },{
                name:'test',
                blog_text_stripped:'test',
                blog_image_path:'test',
            }]
        }
    },
}
</script>

<style scoped>

</style>

<template>
    <div class="container bg-white rounded-1">
        <h1 class="text-center py-2">
            {{ blogFormData.id ? 'Nieuwsbericht bewerken' : 'Nieuwsbericht aanmaken' }}
        </h1>
        <form @submit.prevent="submitForm">
            <FieldBuilder
                :model="blogFormData"
                :fields="[
                   {
                        label: 'Blog',
                        attribute: 'news_text',
                        type: 'html',
                        rules:'required'
                    }]"
            />
            <FileUpload
                name="pond"
                ref="imageUpload"
                label="Upload hier de afbeelding voor het nieuwsbericht."
                :multiple="false"
                :initialFiles="blogFormData.news_image_path"
                required
            />
            <ErrorField :error="errorException"/>

            <div class="px-4 py-3 text-right sm:px-6">
                <button
                    @click.prevent="$router.go(-1)"
                    class="inline-flex justify-center mx-2 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-800 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Terug
                </button>
                <button
                    type="submit"
                    class="inline-flex justify-center mx-2 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Maak sfeeractie
                </button>
            </div>
        </form>

    </div>
</template>

<script>
import FieldBuilder from "@/components/FieldBuilder.vue";
import FileUpload from "@/components/FileUpload.vue";
import ErrorField from "@/components/ErrorField.vue";

export default {
    name: "NieuwNieuwsBericht",
    components: {
        FieldBuilder,
        FileUpload,
        ErrorField
    },
    async created() {
        // If we are called with an ID, we are in update modus
        const newsId = this.$route.params.id

        if (newsId) {
            // Get blog data
            this.blogFormData = (await this.axios.get('/v1/office/news/' + newsId)).data;

        }
    },
    data() {
        return {
            blogFormData: {},
            errorException: null,
        }
    },
    methods: {
        async submitForm() {
            let url = '/v1/office/news'
            if (this.blogFormData.id) {
                url += '/' + this.blogFormData.id;
            }
            try {
                this.blogFormData = (await this.axios.post(url, this.blogFormData)).data;
                console.log("test1");
                await this.$refs.imageUpload.submit(`/v1/office/news/${this.blogFormData.id}/upload`, null, null, null);
                console.log("test2");
                this.$router.push('/dashboard');
            } catch (e) {
                this.errorException = e;
                return;
            }

        },
    }
}
</script>

<style scoped>

</style>

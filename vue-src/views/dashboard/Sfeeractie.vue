<template>
<div class="container">
    <Modal v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            <p v-if="this.requestResponse === true">Sfeeractie toegevoegd.</p>
            <p v-else>Fout</p>
        </template>
        <template v-slot:body>
            <p v-if="this.requestResponse === true">
                De sfeeractie is succesvol toegevoegd.
            </p>
            <p v-else>Er ging iets mis tijdens het aanmaken van de sfeeractie, probeer het later opnieuw</p>
        </template>
    </Modal>
    <div class="row">
        <div class="col-12">
            <h1>Nieuw Bericht</h1>
        </div>
    </div>
    <div class="row justify-content-between">
        <form @submit.prevent="submit">
            <FieldBuilder
                :model="eventFormData"
                :fields="[
                    {
                        label: 'Titel',
                        attribute: 'title',
                        rules:'required'
                    },
                    {
                        label: 'Beschrijving',
                        attribute: 'description',
                        type: 'html',
                        rules:'required'
                    }]"
            />
            <FileUpload
                name="pond"
                ref="imageUpload"
                label="Upload hier de afbeelding voor het nieuwsbericht."
                :multiple="false"
                :initialFiles="initialImageFiles"
                required
            />
            <div class="col-12">
                <button type="submit" class="d-flex btn btn-primary ms-auto">
                    Plaats Sfeeractie
                </button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
import FieldBuilder from "@/components/FieldBuilder.vue";
import FileUpload from "@/components/FileUpload.vue";
import Modal from "../lidWorden/components/Modal.vue";
export default {
    name: "NieuwBericht",
    data() {
        return {
            eventFormData: {},
            requestResponse: false,
            isModalVisible: false,
            errors: { },
        };
    },
    components: { Modal, FieldBuilder, FileUpload },
    async created() {
        const eventId = this.$route.params.id;

        if (eventId) {
            this.eventFormData = (await this.axios.get('/v1/dashboard/sfeeracties/' + eventId)).data;
            console.log(this.eventFormData);
        }
    },
    methods: {
        async submit() {
            try {
                let url = '/v1/dashboard/nieuw-bericht';
                if (this.eventFormData.id) {
                    url += '/' + this.eventFormData.id;
                }
                console.log(url);
                this.eventFormData = (await this.axios.post(url, this.eventFormData)).data;
                this.$refs.imageUpload.submit(`/v1/dashboard/${this.eventFormData.id}/upload`, null, null, null);
                this.isModalVisible = true;
                this.requestResponse = true;
            } catch(error) {
                this.isModalVisible = true;
                this.requestResponse = false;
            }
        },
        handleFileChange(event) {
            this.form.file = event.target.files[0];
        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
            this.$router.push('/dashboard')
        }
    }
}
</script>

<style scoped>

</style>

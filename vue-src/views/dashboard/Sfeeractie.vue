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
            <div class="row mb-2">
                <div class="col-2">
                    <label for="postTitle" class="form-label">Titel</label>
                </div>
                <div class="col-10">
                    <span v-for="(errorItem, index) in errors.title">{{errorItem}}</span>
                    <input v-model="form.title" type="text" class="form-control"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2">
                    <label for="postFile" class="form-label">foto/filmpje</label>
                </div>
                <div class="col-10">
                    <span v-for="(errorItem, index) in errors.file">{{errorItem}}</span>
                    <input 
                        v-on:change="handleFileChange($event)"
                        type="file"
                        class="custom-file-input"
                        ref="fileupload">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2">
                    <label for="postDescription" class="form-label">Beschrijving</label>
                </div>
                <div class="col-10">
                    <span v-for="(errorItem, index) in errors.description">
                        {{errorItem}}
                    </span>
                    <textarea v-model="form.description" class="form-control" rows="5"/>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="d-flex btn btn-primary ms-auto">
                    Opslaan
                </button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
import Modal from "../lidWorden/components/Modal.vue";
export default {
    name: "NieuwBericht",
    data() {
        return {
            form: { 
                'title': '',
                'file':  '',
                'description': ''
            },
            requestResponse: false,
            isModalVisible: false,
            errors: { },
        };
    },
    components: { Modal },
    methods: {
        submit() {
            /* Need to create new formdata object or the image can't be uploaded. */
            let formData = new FormData();
            formData.append('title', this.form.title);
            formData.append('file', this.form.file);
            formData.append('description', this.form.description);

            this.axios.post('/v1/dashboard/nieuw-bericht', formData).then(response=>{
                if (response.data.message === true) {
                    this.requestResponse = true;
                    this.showModal();
                    this.form = {'title': '', 'file': '', 'description': ''}
                    this.$refs.fileupload.value=null;
                }
            }).catch(error=>{
                this.requestResponse = true;
                this.errors = error.response.data.message.fields;
            });
        },
        handleFileChange(event) {
            this.form.file = event.target.files[0];
        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    }
}
</script>

<style scoped>

</style>

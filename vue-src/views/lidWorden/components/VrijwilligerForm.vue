<template>
    <Modal v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            <p v-if="this.requestResponse === true">Uw aanmelding wordt verwerkt.</p>
            <p v-else>Fout</p>
        </template>
        <template v-slot:body>
            <p v-if="this.requestResponse === true">
                <b>Wat nu?</b><br>
                Uw aanmelding wordt verwerkt door de administatie, u krijgt later een mail met meer informatie
                over uw aanmelding
            </p>
            <p v-else>Er ging iets mis tijdens het aanmelden, probeer het later opnieuw</p>
        </template>
    </Modal>

    <form @submit.prevent="submit" style="width: 50%; justify-content: center; margin: auto;">
        <h2>Word vrijwilliger</h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Naam</label>
                <div class="control">
                    <input v-model="form.name" type="text" placeholder="Voornaam" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label"> </label>
                <div class="control">
                    <input v-model="form.surname" type="text" placeholder="Achternaam" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Straat + huisnummer</label>
                <div class="control">
                    <input v-model="form.address" type="text" placeholder="Adres" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Postcode</label>
                <div class="control">
                    <input v-model="form.postal_code" type="text" placeholder="Postcode" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label">Plaats </label>
                <div class="control">
                    <input v-model="form.residence" type="text" placeholder="Plaats" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">E-mail</label>
                <div class="control">
                    <input v-model="form.email" type="email" placeholder="E-mail" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label">Telefoonnummer</label>
                <div class="control">
                    <input v-model="form.phone" type="text" placeholder="Telefoonnummer" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Geboortedatum</label>
                <div class="control">
                    <input v-model="form.date_of_birth" type="date" placeholder="Geboortedatum" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label">Geslacht </label>
                <div class="control">
                    <select v-model="form.gender" type="text">
                        <option value="man">Man</option>
                        <option value="vrouw">Vrouw</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="control">
            <label class="checkbox">
                <input class="" type="checkbox" v-model="form.terms">
                Ik ga akkoord met de <a class="" href="#">algemene voorwaarden</a>

            </label>
        </div>
        <button style="justify-content: center; margin: auto;" type="submit">
            Verzenden
        </button>
    </form>
</template>
    <script>
import { defineComponent } from 'vue';
import Modal from '../components/Modal.vue'

export default defineComponent({
   data() {
       return {
           requestResponse: false,
           form: {
           },
           isModalVisible: false,
       };
   },
    methods: {
        submit(){
            this.axios.post('/v1/lid-worden', this.form).then(response=>{
                if (response.data.message === 1) {
                    this.requestResponse = true;
                    this.showModal();
                }
            }).catch(error=>{
                this.requestResponse = false;
                this.showModal();
            });
        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    },
    components: {
       Modal
    }
});
</script>
<style>
.row .control input,
.row .control select {
    width: 100%;
}

.vrijwilliger h2{
    color:rgb(250, 227, 0)!important;
}

.checkbox {
    color:#fff;
}

</style>

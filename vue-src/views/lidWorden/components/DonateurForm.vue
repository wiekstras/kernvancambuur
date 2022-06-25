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
        <h2>Word lid</h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Naam</label>
                <div class="control">
                    <input v-model="form.voornaam" type="text" placeholder="Voornaam" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label"> </label>
                <div class="control">
                    <input v-model="form.achternaam" type="text" placeholder="Achternaam" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Straat + huisnummer</label>
                <div class="control">
                    <input v-model="form.adres" type="text" placeholder="Adres" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Postcode</label>
                <div class="control">
                    <input v-model="form.postcode" type="text" placeholder="Postcode" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label">Plaats </label>
                <div class="control">
                    <input v-model="form.plaats" type="text" placeholder="Plaats" />
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
                    <input v-model="form.telefoon" type="text" placeholder="Telefoonnummer" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Maandelijks over te maken bedrag</label>
                <div class="control">
                    <input v-model="form.bedrag" type="text" placeholder="bedrag" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="label">Rekeningnummer</label>
                <div class="control">
                    <input v-model="form.rekeningnummer" type="text" placeholder="rekeningnummer" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="label">Geboortedatum</label>
                <div class="control">
                    <input v-model="form.geboortedatum" type="date" placeholder="Geboortedatum" />
                </div>
            </div>
            <div class="col-6">
                <label class="label">Geslacht </label>
                <div class="control">
                    <select v-model="form.geslacht" type="text">
                        <option value="man">Man</option>
                        <option value="vrouw">Vrouw</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="control mt-3 mb-3">
            <label class="checkbox">
                <input type="checkbox" v-model="form.terms">
                Ik ga akkoord met de <a href="#">algemene voorwaarden</a>
            </label>
        </div>
        <button style="justify-content: center; margin: auto;" type="submit">
            Verzenden
        </button>
    </form>
</template>

<script>
import Modal from "./Modal.vue";

export default {
    name: "DonateurForm",
    data() {
        return {
            requestResponse: false,
            form: {
                voornaam: '',
                achternaam: '',
                adres: '',
                postcode: '',
                plaats: '',
                email: '',
                telefoon: '',
                geboortedatum: '',
                geslacht: '',
                bedrag: '',
                rekeningnummer: '',
                terms: ''
            },
            isModalVisible: false,
        }
    },
    methods: {
        submit() {
            const data = new FormData();
            data.append('name', this.form.voornaam);
            data.append('surname', this.form.achternaam);
            data.append('address', this.form.adres);
            data.append('residence', this.form.plaats);
            data.append('postal_code', this.form.postcode);
            data.append('email', this.form.email);
            data.append('phone', this.form.telefoon);
            data.append('date_of_birth', this.form.geboortedatum);
            data.append('account_number', this.form.rekeningnummer);
            data.append('gender', this.form.geslacht);
            data.append('amount', this.form.bedrag);
            data.append('terms', this.form.terms);

            this.axios.post('/v1/lid-worden/donateur-worden', data).then(response=>{
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
}
</script>

<style scoped>

.donateur h2 {
 color:rgb(250, 227, 0)!important;
}

</style>

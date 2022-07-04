<template>
    <Modal v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            <p v-if="this.requestResponse === true">Uw bericht is verzonden</p>
            <p v-else style="color:red">Fout</p>
        </template>
        <template v-slot:body>
            <p v-if="this.requestResponse === true">
                <b>Wat nu?</b><br>
                Uw bericht is binnen gekomen bij de ons. Wij zullen zo snel mogelijk reageren op het bericht.
            </p>
            <p v-else>Er ging iets mis tijdens het versturen, heeft u alles goed ingevuld?</p>
        </template>
    </Modal>
    <form @submit.prevent="submit" style="width: 50%; justify-content: center; margin: auto;">
        <h1>Contactformulier</h1>
        <p>Stichting Cambuur Supporters (SCS) Kern van Cambuur is er voor alle supporters. Ze wil daarom zoveel mogelijk
            communiceren met iedereen die iets met Cambuur heeft. Heb je een vraag, heb je een idee, vind je dat iets
            anders moet of wil je vrijwilliger of donateur worden, laat het ons weten. Je kunt ons schrijven of mailen.
        </p>
        <div class="row">
            <div class="col-12">
                <label class="label">Naam</label>
                <div class="control">
                    <input v-model="form.naam" type="text" placeholder="Naam" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Email</label>
                <div class="control">
                    <input v-model="form.email" type="email" placeholder="Email" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Telefoonnummer</label>
                <div class="control">
                    <input v-model="form.telefoon" type="phone" placeholder="Telefoonnummer" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Onderwerp</label>
                <div class="control">
                    <input v-model="form.onderwerp" type="text" placeholder="Onderwerp" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Bericht</label>
                <div class="control">
                    <input v-model="form.bericht" type="text" placeholder="Bericht" />
                </div>
            </div>
        </div>
        <button style="justify-content: center; margin: auto;" type="submit">
            Verzenden
        </button>
    </form>
</template>
    <script>
import { defineComponent } from 'vue';
import Modal from '@/views/lidWorden/components/Modal.vue'

export default defineComponent({
    data() {
        return {
                    requestResponse: Boolean,
            form: {
                naam: '',
                email: '',
                telefoon: '',
                onderwerp: '',
                bericht: ''
            },
            isModalVisible: false,
        };
    },
    methods: {
        submit() {
            /*if (!validateForm(this.form)) {
                // Form is invalid
                return;
            }*/
            const data = new FormData();
            data.append('name', this.form.naam);
            data.append('email', this.form.email);
            data.append('phone', this.form.telefoon);
            data.append('subject', this.form.onderwerp);
            data.append('message', this.form.bericht);

            this.axios.post('/v1/contact', data).then(response => {
                if (response.data.message === 1) {
                    this.requestResponse = true;
                    console.log(data);
                    this.showModal();
                }
            }).catch(error => {
                console.log(error)
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

.contact h1 {
    color:rgb(250, 227, 0)!important;
}

.contact p {
    color:#fff;
}

.label {
    color:#fff;
}

.control {
        margin-bottom: 15px;

}
.modal p{
    color:black
}

</style>

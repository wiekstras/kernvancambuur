<template>
    <form @submit.prevent="submit" style="width: 50%; justify-content: center; margin: auto;">
        <h1>Contactformulier</h1>
        <p>Stichting Cambuur Supporters (SCS) Kern van Cambuur is er voor alle supporters. Ze wil daarom zoveel mogelijk communiceren met iedereen die iets met Cambuur heeft. Heb je een vraag, heb je een idee, vind je dat iets anders moet of wil je vrijwilliger of donateur worden, laat het ons weten. Je kunt ons schrijven of mailen.</p>
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

export default defineComponent({
    data() {
        return {
            form: {
                naam: '',
                email: '',
                telefoon: '',
                onderwerp: '',
                bericht: ''
            },
        };
    },
    props: {
        requestResponse: Boolean
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

            this.axios.post('/v1/lid-worden', data).then(response => {
                if (response.data.message === 1) {
                    this.requestResponse = true;
                    this.showModal();
                }
            }).catch(error => {
                this.requestResponse = false;
                this.showModal();
            });
        },
    }
});
</script>
<style>
.row .control input,
.row .control select {
    width: 100%;
}
</style>

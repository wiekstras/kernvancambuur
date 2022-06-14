<template>
    <form @submit.prevent="console.log(form)" style="width: 50%; justify-content: center; margin: auto;">
        <h1>Lid worden</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, libero facere omnis nulla praesentium
            suscipit molestias atque neque reiciendis sunt!</p>
        <div class="row">
            <div class="col-6">
                <label class="label">Naam</label>
                <div class="control">
                    <input v-model="form.fields.voornaam.value" type="text" placeholder="Voornaam" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.voornaam).join(', ') }}
                </p>
            </div>
            <div class="col-6">
                <label class="label"> </label>
                <div class="control">
                    <input v-model="form.fields.achternaam.value" type="text" placeholder="Achternaam" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.achternaam).join(', ') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="label">Straat + huisnummer</label>
                <div class="control">
                    <input v-model="form.fields.adres.value" type="text" placeholder="Adres" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.adres).join(', ') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="label">Postcode</label>
                <div class="control">
                    <input v-model="form.fields.postcode.value" type="text" placeholder="Postcode" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.postcode).join(', ') }}
                </p>
            </div>
            <div class="col-6">
                <label class="label">Plaats </label>
                <div class="control">
                    <input v-model="form.fields.plaats.value" type="text" placeholder="Plaats" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.plaats).join(', ') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="label">E-mail</label>
                <div class="control">
                    <input v-model="form.fields.email.value" type="email" placeholder="E-mail" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.email).join(', ') }}
                </p>
            </div>
            <div class="col-6">
                <label class="label">Telefoon </label>
                <div class="control">
                    <input v-model="form.fields.telefoon.value" type="tel" placeholder="Telefoon" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.plaats).join(', ') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="label">Geboortedatum</label>
                <div class="control">
                    <input v-model="form.fields.geboortedatum.value" type="date" placeholder="Geboortedatum" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.geboortedatum).join(', ') }}
                </p>
            </div>
            <div class="col-6">
                <label class="label">Geslacht </label>
                <div class="control">
                    <select v-model="form.fields.geslacht.value" type="text">
                        <option value="man">Man</option>
                        <option value="vrouw">Vrouw</option>
                    </select>
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.geslacht).join(', ') }}
                </p>
            </div>
        </div>
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" v-model="form.terms">
                I agree to the <a href="#">terms and conditions</a>
            </label>
            <p>
                {{ getFieldError(form.fields.terms).join(', ') }}
            </p>
        </div>
        <button style="justify-content: center; margin: auto;" type="submit">
            Verzenden
        </button>
    </form>
</template>
    <script>
import { defineComponent } from 'vue';
import { getFieldError, getRawFormData, useForm, validateForm } from 'vue3-form';

export default defineComponent({
    setup() {
        const form = useForm({
            voornaam: { rules: ['required', 'alphabetsOnly'] },
            achternaam: { rules: ['required', 'alphabetsOnly'] },
            adres: { rules: ['required',] },
            postcode: { rules: ['required',] },
            plaats: { rules: ['required',] },
            email: { rules: ['required',] },
            telefoon: { rules: ['required',] },
            geboortedatum: { rules: ['required',] },
            geslacht: { rules: ['required',] },
            terms: { rules: ['required',] },
        });

        const submit = () => {
            if (!validateForm(form)) {
                // Form is invalid
                return;
            }

            // Form is valid...
            // proceed with submission.
            const fields = getRawFormData(form);
        }

        return { form, getFieldError, submit };
    },
});
</script>
<style>
.row .control input,
.row .control select {
    width: 100%;
}
</style>
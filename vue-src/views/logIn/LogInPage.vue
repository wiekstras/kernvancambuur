<template>
    <form @submit.prevent="console.log(form)" style="width: 50%; justify-content: center; margin: auto;">
        <h1>Login</h1>
        <div class="row">
            <div class="col-6">
                <label class="label">Gebruikersnaam</label>
                <div class="control">
                    <input v-model="form.fields.gebruikersnaam.value" type="text" placeholder="Gebruikersnaam" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.gebruikersnaam).join(', ') }}
                </p>
            </div>
            <div class="col-6">
                <label class="label">Wachtwoord</label>
                <div class="control">
                    <input v-model="form.fields.wachtwoord.value" type="password" placeholder="Wachtwoord" />
                </div>
                <!-- Display error message -->
                <p>
                    {{ getFieldError(form.fields.wachtwoord).join(', ') }}
                </p>
            </div>
        </div>
    </form>
</template>
<script>

import { defineComponent } from 'vue';
import { getFieldError, getRawFormData, useForm, validateForm } from 'vue3-form';

export default defineComponent({
    setup() {
        const form = useForm({
            gebruikersnaam: { rules: ['required'] },
            wachtwoord: { rules: ['required'] },
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
</style>
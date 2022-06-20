<template>
    <div class="row">
        <template v-for="field in fields" :key="field.attribute">

            <span class="col-2">
                {{ field.label }}
            </span>

            <div class="col-10">
                <InputWrapper
                    v-model="model[field.attribute]"
                    :id="field.attribute"
                    :formType="field.type"
                    :rules="field.rules"
                    :disabled="field.disabled"
                    :options="field.options"
                    :optionValue="field.optionValue"
                    :optionLabel="field.optionLabel"
                    :autocomplete="field.autocomplete"
                />
            </div>


        </template>
    </div>
</template>

<script>
import InputWrapper from "./InputWrapper.vue";

export default {
    name: "FieldBuilder",
    components: {
        InputWrapper,
    },
    props: {
        model: Object,
        fields: Array,
        inline: Boolean,
    },
}
</script>

<style scoped>

</style>

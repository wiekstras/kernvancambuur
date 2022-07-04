<template>
    <component
        :is="componentType"

        @update:model-value="e => $emit('update:modelValue', e)"
        :model-value="modelValue"
        :id="id"
        :placeholder="placeholder"
        :disabled="disabled"
        :options="options"
        :optionValue="optionValue"
        :optionLabel="optionLabel"
        :autocomplete="autocomplete"
    />
</template>

<script>
import HTMLInput from "./HTMLInput.vue";
import TextInput from "./TextInput.vue";

export default {
    name: "InputWrapper",
    components: {

    },

    props: {
        id: String,
        placeholder: String,
        rules: String,
        formType: {
            type: String,
            default: "text",
        },
        disabled: {
            type: Boolean,
            default: false,
        },
        valid: undefined,
        modelValue: undefined,
        options: undefined,
        optionValue: undefined,
        optionLabel: undefined,
        autocomplete: undefined,
    },
    validations() {
        return {
            modelValue: this.parseRule(this.rules)
        };
    },
    computed: {
        componentType() {
            switch (this.formType) {
                case 'html':
                    return HTMLInput;
                    // TODO get dynamic importing working, saves quite some bundle size!
                    // return () => import('./HTMLInput.vue');
                default:
                    return TextInput;
            }
        }
    },
    methods: {
        // TODO parse rules properly...
        parseRule(rule) {
            return {required}
        },
    }
}
</script>

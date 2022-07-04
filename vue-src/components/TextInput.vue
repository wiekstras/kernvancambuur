<template>
    <InputText
        :model-value="modelValue"
        @update:model-value="e => $emit('update:modelValue', e)"
        :class="{'p-invalid': !valid}"
        :placeholder="placeholder"
        :disabled="disabled"
        :autocomplete="id"
    />
</template>

<script>
import InputText from 'primevue/inputtext';

export default {
    name: "TextInput",
    components: {
        InputText,
    },
    props: {
        id: String,
        placeholder: String,
        modelValue: undefined,
        valid: Boolean,
        disabled: Boolean,
    },
}
</script>
<style scoped>
.p-component, :deep(.p-component) {
    width: 100% !important;
}
</style>

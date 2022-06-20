<template>
    <ckeditor
        :editor="editor"
        :model-value="modelValue"
        :config="editorConfig"
        @update:model-value="e => $emit('update:modelValue', e)"
    />
</template>


<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import '@ckeditor/ckeditor5-build-classic/build/translations/nl.js'

export default {
    name: "HTMLInput",
    props: {
        modelValue: null,
    },
    data() {
        return {
            focussed: false,
            editor: ClassicEditor,
            editorConfig: {
                language: 'nl',
                height: '200'
                // heading: {
                //     options: [
                //         {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                //         {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                //         {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'},
                //         {model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3'}
                //     ]
                // }
            }
        }
    },
}
</script>

<style>
.ck-editor__editable_inline {
    min-height: 150px;
}
</style>

<template>
    <FilePond
        name="pond"
        ref="pond"
        data-max-files="10"
        credits="false"
        instant-upload="false"
        itemInsertLocation="after"
        imageCropAspectRatio="16:9"
        :accepted-file-types="fileTypes"
        :allow-multiple="multiple"
        :allow-reorder="multiple"
        :files="initialFiles"
        :label-idle="label"
        :required="required"
    />
</template>

<script>
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';

const FilePond = vueFilePond();
export default {
    name: "FileUpload",
    components: {
        FilePond,
    },
    props: {
        initialFiles: Array,
        label: String,

        editImage: {
            type: Boolean,
            default: false,
        },
        required: {
            type: Boolean,
            default: false,
        },
        imageCropAspectRatio: {
            type: Number,
            default: 16 / 9,
        },
        multiple: {
            type: Boolean,
            default: false,
        },
        fileTypes: {
            type: String,
            default: "image/jpeg, image/png",
        }
    },
    methods: {
        async submit(
            urlUpload,
            urlDelete,
            urlSort,
            sortAttribute
        ) {
            // Loop through all selected files
            const pondFiles = await this.$refs.pond.prepareFiles();
            let fileServerIds = [];

            for (const pondFile of pondFiles) {
                const file = pondFile.file

                // Check if the file needs uploading
                if (typeof file.source === 'object') {
                    const formData = new FormData();
                    formData.append("file", pondFile.output);

                    const uploadedFile = (await this.axios.post(urlUpload, formData)).data;

                    fileServerIds.push(uploadedFile.id);
                } else {
                    // The image already exists on the server, but we can't pass the serverId directly anymore so get it
                    const initialPondFile = this.initialFiles.find((element => {
                        return element.source === file.source
                    }));

                    fileServerIds.push(initialPondFile.serverId);
                }
            }

            // Call delete/sort endpoints when we got something to delete&sort
            if (this.multiple) {
                // Get IDs of the initial images and get the difference, so we know which to delete
                const initialFileServerIds = this.initialFiles.map(e => e.serverId),
                    deletedFileServerIds = initialFileServerIds.filter(item => !fileServerIds.includes(item));

                // Delete images
                for (const imageId of deletedFileServerIds) {
                    await this.axios.delete(`${urlDelete}/${imageId}`)
                }

                // Re-sort images
                if(fileServerIds.length > 0) {
                    let formData = {}
                    formData[sortAttribute] = fileServerIds
                    await this.axios.post(urlSort, formData)
                }
            }
        }
    },
}
</script>

<style scoped>
@media (min-width: 40em) {
    :deep(.filepond--item) {
        width: calc(50% - 0.5em);
    }
}

@media (min-width: 50em) {
    :deep(.filepond--item) {
        width: calc(33.33% - 0.5em);
    }
}

:deep(.filepond--panel-root) {
    background-color: #eaeaea;
}
</style>

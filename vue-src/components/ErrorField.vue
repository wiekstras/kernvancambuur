<template>
    <div v-if="error" class="text-red-500 text-xs">
        {{ formattedError }}
    </div>
</template>

<script>
export default {
    name: "ErrorField",
    props: {
        error: Object,
    },
    computed: {
        formattedError() {
            // If we have a Response obj, try to get the relevant data from it
            if (this.error.response && this.error.response.data) {
                const msg = this.error.response.data.message;
                switch (typeof msg) {
                    case 'object':
                        if (typeof msg.fields === 'object') {
                            return msg.fields[Object.keys(msg.fields)[0]][0]
                        }
                        if (typeof msg.errors === 'string') {
                            return msg.errors;
                        }
                    case 'string':
                        return msg;
                }
            }

            // Return the whole error as is, hopefully with not too much technical mumbo jumbo..
            return this.error;
        }
    }
}
</script>
<style scoped>
</style>

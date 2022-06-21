<template>
         <DataTable :value="data">
                        <template v-for="col in columns" :key="col.attribute">
                            <template v-if="col.type === 'image'">
                                <Column :header="col.name" :field="col.attribute" :sortable="col.sortable">
                                    <template #body="slotProps">
                                        <img :src="slotProps.data[col.attribute]"
                                             :alt="slotProps.data[col.attribute]"
                                             class="h-10 w-10 rounded-full m-2"/>
                                    </template>
                                </Column>
                            </template>
                            <template v-else-if="col.type === 'button'">
                                <Column :header="col.name" :field="col.attribute" :sortable="col.sortable">
                                    <template #body="slotProps">
                                        <button
                                            class="w-full bg-primary border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                            {{ slotProps.data[col.attribute] }}
                                        </button>
                                    </template>
                                </Column>
                            </template>
                            <template v-else>
                                <Column :header="col.name" :field="col.attribute" :sortable="col.sortable"></Column>
                            </template>
                        </template>
                        <template v-if="actions">
                            <Column header="Acties">
                                <template #body="slotProps">
                                    <template v-for="action in actions">
                                        <template v-if="!action.filter || action.filter(slotProps.data)">
                                            <button class="m-1" @click="$emit(action.action, slotProps.data)">
                                            </button>
                                        </template>
                                    </template>
                                </template>
                            </Column>
                        </template>
                    </DataTable>
</template>
<script>
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';

export default {
    name: "DataTable",
    components: {
        DataTable,
        Column
    },
    props: {
        columns: Array,
        data: Array,
        actions: Array,
        actionText: String,
        approve: Boolean,

    },
    methods: {
    },
    computed: {}
};
</script>

<style>
.VueTables__child-row-toggler--closed::before {
    content: "+";
}

.VueTables__child-row-toggler--open::before {
    content: "-";
}

</style>

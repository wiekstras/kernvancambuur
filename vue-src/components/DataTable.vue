<template>
    <div class="datatable">
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow border-b border-gray-200 bg-gray-50 sm:rounded-lg">
                    <DataTable :value="data" responsiveLayout="scroll">
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
                                                <font-awesome-icon class="h-6" :icon="['far', action.icon]"/>
                                            </button>
                                        </template>
                                    </template>
                                </template>
                            </Column>
                        </template>
                    </DataTable>
                </div>
            </div>
        </div>
    </div>
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
/* TODO use scoped! */
/*
0: 'Wachten op goedkeuring', //Oranje Geel
1: 'Goedgekeurd', //Groen Oranje
2: 'Afgekeurd', //Rood Rood
3: 'Gestart', //Blauw Groen
4: 'Wachten op trekking', // Geel Donkergroen
5: 'Afgerond', //Donkergroen DonkerBlauw
*/
.status {
    border-radius: 2px;
    padding: 0.25em 0.5rem;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 12px;
    letter-spacing: .3px;
}

.wachtenOpGoedkeuring {
    background-color: #feedaf;
    color: #8a5340;
}

.goedgekeurd {
    background-color: #ffd8b2;
    color: #805b36;
    border-radius: 5px;
}

.afgekeurd {
    background-color: #ffcdd2;
    color: #c63737;
    border-radius: 5px;
}

.gestart {
    background-color: #c8e6c9;
    color: #1f5022;
    border-radius: 5px;
}

.wachtenOpTrekking {
    background-color: #97bd98;
    color: #103612;
    border-radius: 5px;
}

.afgerond {
    background-color: #b3e5fc;
    color: #23547b;
    border-radius: 5px;
}

.VueTables__child-row-toggler {
    width: 16px;
    height: 16px;
    line-height: 16px;
    display: block;
    margin: auto;
    text-align: center;
}

.VueTables__child-row-toggler--closed::before {
    content: "+";
}

.VueTables__child-row-toggler--open::before {
    content: "-";
}

</style>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3'
</script>

<template>
    <authenticated-layout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Especialidades</h2>
        </template>

        <v-container>
            <v-card class="mx-auto my-4" max-width="800">
                <v-card-title>Gestión de Especialidades</v-card-title>
                <v-card-text>
                    Aquí puedes gestionar las especialidades disponibles en el sistema.
                </v-card-text>
                <v-card-actions>
                    <v-btn color="primary">Agregar Especialidad</v-btn>
                </v-card-actions>
            </v-card>
        </v-container>
    </authenticated-layout>


</template>

<script>
import Home from "../Home.vue";

export default {
    name: "Index",
    components: {Home},
    props:{
        registros:Array,
    },
    data: vm => ({
        items :[
            {
                name: 'African Elephant',
                species: 'Loxodonta africana',
                diet: 'Herbivore',
                habitat: 'Savanna, Forests',
            },
            {
                name: 'African Elephant',
                species: 'Loxodonta africana',
                diet: 'Herbivore',
                habitat: 'Savanna, Forests',
            },
        ]
    })
}

// import Home from "../Home.vue";
// export default {
//     name: "Index",
//     components: {Home}
// }
</script>

<style scoped>

</style>

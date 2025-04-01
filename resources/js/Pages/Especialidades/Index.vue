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

            <div style="width: 100%">

                <v-card
                    class="mx-auto my-8"
                    elevation="16"
                    width="90%"

                >
                    <v-card-item>
                        <v-card-title>
                            Especialidades

                        </v-card-title>

                        <v-card-subtitle>

                            <div class="d-flex justify-md-end justify-sm-center ">
                                <Link :href="route('create-especialidad')" as="div" >
                                    <!--                            <Link href="/especialidades/create" as="div">-->
                                    <v-btn append-icon="mdi-content-save" style="background-color:#121D40;color: white ">Registrar Especialidades
                                    </v-btn>
                                </Link>
                                <!--                            <v-btn>Crear</v-btn>-->
                            </div>

                        </v-card-subtitle>
                    </v-card-item>

                    <v-card-text>

                        <v-data-table :items="this.registros"></v-data-table>


                    </v-card-text>
                </v-card>

            </div>



            <!--            <v-card class="mx-auto my-4" max-width="800">-->
<!--                <v-card-title>Gestión de Especialidades</v-card-title>-->
<!--                <v-card-text>-->
<!--                    Aquí puedes gestionar las especialidades disponibles en el sistema.-->
<!--                </v-card-text>-->
<!--                <v-card-actions>-->
<!--                    <v-btn :href="route('dashboard')" color="primary">Agregar Especialidad</v-btn>-->
<!--&lt;!&ndash;                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">&ndash;&gt;-->
<!--&lt;!&ndash;                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">&ndash;&gt;-->
<!--&lt;!&ndash;                            Dashboard&ndash;&gt;-->
<!--&lt;!&ndash;                        </NavLink>&ndash;&gt;-->
<!--&lt;!&ndash;                    </div>&ndash;&gt;-->
<!--                </v-card-actions>-->
<!--            </v-card>-->

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

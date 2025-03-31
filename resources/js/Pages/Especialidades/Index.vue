<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3'

import NavLink from '@/Components/NavLink.vue';
</script>
<template>
<!--    <Home>-->

        <Head title="Especialidades" />

        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
            </template>

            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Dashboard
                </NavLink>
            </div>
<h1>hello from index de especialidades</h1>

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
                            <Link :href="route('dashboard')" as="div" >
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



<!--    </Home>-->

        </AuthenticatedLayout>

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

</script>

<style scoped>

</style>

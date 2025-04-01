<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3'
</script>

<template>
    <authenticated-layout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Especialidades/Registrar</h2>
        </template>
        <div style="width: 100%">

            <v-card
                class="mx-auto my-8"
                elevation="16"
                width="90%"

            >
                <v-card-item>
                    <v-card-title>
                        Registro

                    </v-card-title>

                    <v-card-subtitle>

                        <div class="d-flex justify-md-end justify-sm-center ">
                            <Link :href="route('create-especialidad')" as="div" >
                                <v-btn append-icon="mdi-content-save" style="background-color:#121D40;color: white ">Registrar Especialidades
                                </v-btn>
                            </Link>

                        </div>

                    </v-card-subtitle>
                </v-card-item>

                <v-card-text>

<!--                    <template>-->
                        <v-sheet class="mx-auto" width="300">
                            <v-form fast-fail @submit.prevent>
                                <v-text-field
                                    v-model="firstName"
                                    :rules="firstNameRules"
                                    label="Nombre de Especialidad"
                                ></v-text-field>

                                <v-textarea
                                    v-model="lastName"
                                    :rules="lastNameRules"
                                    label="Descripcion"
                                ></v-textarea>

                                <v-btn class="mt-2" type="submit" block>Registrar</v-btn>
                            </v-form>
                        </v-sheet>
<!--                    </template>-->

                </v-card-text>
            </v-card>

        </div>


    </authenticated-layout>
</template>

<script>
export default {
    name: "Create"
}
</script>

<style scoped>

</style>

<script setup>
import {Head, Link} from '@inertiajs/vue3'
</script>
<template>
    <Home>
<h1>hello from index de especialidades</h1>



            <v-card
                class="mx-auto my-8"
                elevation="16"

            >
                <v-card-item>
                    <v-card-title>
                        Especialidades

                    </v-card-title>

                    <v-card-subtitle>

                        <div class="text-end">
                            <Link href="/especialidades/create" as="div">
                                <v-btn append-icon="mdi-content-save" style="background-color:#121D40;color: white ">Subir Documentos
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



    </Home>



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

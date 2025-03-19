<template>
    <v-card>
        <v-layout>
            <v-navigation-drawer
                expand-on-hover
                rail
            >
                <v-list>
                    <v-list-item
                        prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg"
                        subtitle="sandra_a88@gmailcom"
                        title="Sandra Adams"
                    ></v-list-item>
                </v-list>

                <v-divider></v-divider>

                <v-list density="compact" nav>
                    <v-list-item prepend-icon="mdi-hospital" title="Especialidades" value="myfiles"></v-list-item>
                    <v-list-item prepend-icon="mdi-account-multiple" title="Shared with me" value="shared"></v-list-item>
                    <v-list-item prepend-icon="mdi-star" title="Starred" value="starred"></v-list-item>
                </v-list>
            </v-navigation-drawer>

        <v-app>


            <v-main>
                <v-container>
                    <slot />
                </v-container>
            </v-main>

            </v-app>
        </v-layout>
    </v-card>
</template>

<!--<template>-->
<!--    <v-app>-->
<!--    <div>-->
<!--        <h1>Bienvenido a Laravel con Inertia y Vue, PROBANDO</h1>-->
<!--    </div>-->

<!--    <br>-->
<!--    <br>-->

<!--    </v-app>-->
<!--</template>-->

<script>
export default {
    name: "Home",
    props: {
        registros: {
            type: Array,
            default: () => []
        },
    },
    data(){

    }
}
</script>

<style scoped>

</style>

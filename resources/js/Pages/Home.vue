

<template>
    <v-app>
    <div>
        <h1>Bienvenido a Laravel con Inertia y Vue, PROBANDO</h1>
    </div>

    <br>
    <br>

    </v-app>
</template>

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

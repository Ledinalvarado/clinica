

<template>
    <v-app>
    <div>
        <h1>Bienvenido a Laravel con Inertia y Vue</h1>
    </div>

    <br>
    <br>
    <br>
        <v-card loading subtitle="Subtitle" text="...">
            <v-card-actions>
                <v-btn>Click me</v-btn>
            </v-card-actions>
        </v-card>
    </v-app>
</template>

<script>
export default {
    name: "Home",
    props:{
        data:{
            type:Object,
        }
    },
    data(){

    }
}
</script>

<style scoped>

</style>

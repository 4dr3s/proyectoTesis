<template>
    <nav>
        <router-link to="/">Exampl</router-link>
        <router-link to="/register">Registro</router-link>
    </nav>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default{
        mounted() {
            console.log('mounted');
        },
    }
</script>

<style scoped>
    nav {
        height: 10%;
    }
    div {
        height: 90%;
    }
</style>
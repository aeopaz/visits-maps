<template>
    <!-- Lista de visitas -->

    <h4 class="mt-3 ms-4">Visitas de Clientes ({{ markers.length }})</h4>
    <ul class="mt-3">
        <li v-for="marker in markers" :key="marker" @click="openPopup(marker)"
            :class="{ 'active': isActive == marker['id'] }">
            <h5>{{ marker['name'] }}</h5>
            <p>{{ marker['email'] }}</p>
        </li>

    </ul>

</template>

<script src="./lists.js"></script>
<style scoped>
li {
    cursor: pointer;
    list-style: none;
    border-bottom: solid 1px gray;
}

li:hover {
    background: lightgray;
}

.active {
    background: lightgray;

}

h5 {
    font-size: 15px !important;
}

p {
    font-size: 10px;
}

ul {
    max-height: 400px;
    overflow: auto;
    border-radius: 5%;
}
</style>
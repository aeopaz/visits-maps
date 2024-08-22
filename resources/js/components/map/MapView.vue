<template>
    <header-view></header-view>
    <!-- Mapa -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Mapa -->
            <div class="col-xl-6 col-md-12 col-xs-12">
                <h4 class="mt-3">Mapa</h4>
                <div class="mt-3" id="map"></div>
            </div>
            <div class="col-xl-6 col-md-12 col-xs-12">
                <vists-list :markers="markers"></vists-list>
            </div>
        </div>
    </div>

</template>

<script src="./map.js"></script>

<style scoped>
#map {
    height: 400px;
    width: 600px;
    border-radius: 5%;
}
</style>

<template>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand ms-3" href="#">VisitsMaps</a>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Mapa -->
            <div class="col-xl-8 col-md-12 col-xs-12">
                <h4 class="mt-3">Mapa</h4>
                <div class="mt-3" id="map"></div>
            </div>
            <vists-list :markers="markers"></vists-list>
        </div>
    </div>

</template>

<script src="./map.js"></script>

<style scoped>
#map {
    height: 400px;
    width: 600px;
}
</style>

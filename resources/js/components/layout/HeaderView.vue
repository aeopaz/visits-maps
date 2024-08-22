<template>
    <!-- header -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand ms-3" href="#">Geolocalización Visitas Clientes</a>
        <div class="dropdown">
            <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
               {{ userName }}
            </a>
            <ul class="dropdown-menu">
                <li @click="logout()"><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
        </div>

    </nav>
</template>

<script src="./header.js" </script>
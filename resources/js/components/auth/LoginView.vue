<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Iniciar Sesión</h2>
                <div class="text-center mb-5 text-dark">Visits Maps</div>
                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5">
                        <div v-if="message" class="alert alert-danger" role="alert">
                            {{ message }}
                        </div>
                        <div class="text-center">
                            <img src="http://localhost/visits-maps/public/assets/img/user_profile.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input v-model="formData.email" type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input v-model="formData.password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button @click="onLogin()" type="button" class="btn btn-dark px-5 mb-5 w-100" :class="{'disabled':isLoading}">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script src="./login.js"></script>
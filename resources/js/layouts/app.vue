<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/livro">livros</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/genero">Generos</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/autor">Autores</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/editora">editora</router-link>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>

</template>

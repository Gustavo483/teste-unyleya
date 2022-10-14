<template>
    <div class="container">
        <div class="flex place-content-end mb-4 mt-5">

            <h1 class="text-center colortext">Livros Cadastrados</h1>

            <div class=" text-end">
                <router-link :to="{ name: 'livro.create' }" class="text-sm font-medium btn btn-primary">Adicionar livro</router-link>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TITULO</th>
                <th scope="col">NOME AUTOR</th>
                <th scope="col">NOME EDITORA</th>
                <th scope="col">NOME GÊNERO</th>
                <th scope="col">EDITAR</th>
                <th scope="col">EXCLUR</th>
            </tr>
            </thead>
            <tbody v-for="livro in livros" :key="livro.id">
            <tr>
                <td>
                    {{ livro.id}}
                </td>
                <td>
                    {{ livro.titulo}}
                </td>
                <td>
                    {{ livro.autores.nome}}
                </td>
                <td>
                    {{ livro.editoras.nome_editora }}
                </td>
                <td>
                    {{ livro.generos.nome_genero_literario}}
                </td>
                <td>
                    <router-link class=" btn btn-primary" :to="{ name: 'livro.edit', params: { id: livro.id } }">
                        Edit
                    </router-link>
                </td>
                <td >
                    <button class="btn btn-danger" @click="DeletarLivro(livro.id)">
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>

import { onMounted } from "vue";
import RegrasLivro from "@/composables/livros";


const { livros, getLivros, ExcluirLivro } = RegrasLivro()

onMounted(getLivros)

const DeletarLivro = async (id) => {
    if (!window.confirm("Tem certeza que deseja excluir essa editora?" +id)) {
        return
    }
    await ExcluirLivro(id);
    await getLivros();
}
</script>

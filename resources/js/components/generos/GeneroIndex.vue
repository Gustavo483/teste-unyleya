<template>
    <div class="container">
        <div class="flex place-content-end mb-4 mt-5">
            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md cursor-pointer text-end">
                <router-link :to="{ name: 'genero.create' }" class="text-sm font-medium btn btn-primary">Adicionar Gênero literário</router-link>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gênero Literário</th>
                <th scope="col">editar</th>
                <th scope="col">excluir</th>
            </tr>
            </thead>
            <tbody v-for="genero in generos" :key="genero.id">
            <tr>
                <td>
                    {{ genero.id}}
                </td>
                <td>
                    {{ genero.nome_genero_literario}}
                </td>
                <td>
                    <router-link class=" btn btn-primary" :to="{ name: 'genero.edit', params: { id: genero.id} }">
                        Edit
                    </router-link>
                </td>
                <td >
                    <button class="btn btn-danger" @click="DeletarGenero(genero.id)">
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
import RegrasGenero from "@/composables/generos";
const { generos, getGeneros, ExcluirGenero } = RegrasGenero()
onMounted(getGeneros)

const DeletarGenero = async (id) => {
    if (!window.confirm("Tem certeza que deseja excluir esse gênero literário?")) {
        return
    }
    await ExcluirGenero(id);
    await getGeneros();
}

</script>

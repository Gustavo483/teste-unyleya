<template>
    <div class="container">
        <div class="flex place-content-end mb-4 mt-5">
            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md cursor-pointer text-end">
                <router-link :to="{ name: 'autor.create' }" class="text-sm font-medium btn btn-primary">Adicionar autor</router-link>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">ano de nascimento</th>
                <th scope="col">sexo</th>
                <th scope="col">nacionalidade</th>
                <th scope="col">editar</th>
                <th scope="col">excluir</th>
            </tr>
            </thead>
            <tbody v-for="item2 in autores" :key="item2.id">
            <tr>
                <td>
                    {{ item2.id}}
                </td>
                <td>
                    {{ item2.nome}}
                </td>
                <td>
                    {{ item2.sexo}}
                </td>
                <td>
                    {{ item2.nacionalidade}}
                </td>
                <td>
                    <router-link class=" btn btn-primary" :to="{ name: 'autor.edit', params: { id: item2.id } }">
                        Edit
                    </router-link>
                </td>
                <td >
                    <button class="btn btn-danger" @click="DeletarAutor(item2.id)">
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
import RegrasAutor from "@/composables/autores";


const { autores, getAutores, ExcluirAutor } = RegrasAutor()

onMounted(getAutores)

const DeletarAutor = async (id) => {
    if (!window.confirm("Tem certeza que deseja excluir essa editora?" +id)) {
        return
    }
    await ExcluirAutor(id);
    await getAutores();
}
</script>

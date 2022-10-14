<template>
    <div class="container">
        <div class="flex place-content-end mb-4 mt-5">
            <h1 class="text-center colortext">Editoras cadastradas Cadastrados</h1>
            <div class=" text-end">
                <router-link :to="{ name: 'editora.create' }" class="text-sm font-medium btn btn-primary">Criar
                    editora
                </router-link>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">EDITORA</th>
                <th scope="col">EDITAR</th>
                <th scope="col">EXCLUIR</th>
            </tr>
            </thead>
            <tbody v-for="item in editoras" :key="item.id">
            <tr>
                <td>
                    {{ item.id }}
                </td>
                <td>
                    {{ item.nome_editora }}
                </td>
                <td>
                    <router-link class=" btn btn-primary" :to="{ name: 'editora.edit', params: { id: item.id } }">
                        Edit
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" @click="deleteCompany(item.id)">
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</template>

<script setup>
import RegrasEditora from "@/composables/editora";
import {onMounted} from "vue";

const {editoras, getEditoras, ExcluirEditora} = RegrasEditora()
onMounted(getEditoras)

const deleteCompany = async (id) => {
    if (!window.confirm("tem certeza que deseja excluir essa editora?")) {
        return
    }
    await ExcluirEditora(id);
    await getEditoras();
}
</script>

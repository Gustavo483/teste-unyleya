<template>
    <div class="container">
        <div class="flex place-content-end mb-4 mt-5">
            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md cursor-pointer text-end">
                <router-link :to="{ name: 'editora.create' }" class="text-sm font-medium btn btn-primary">Criar editora</router-link>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">editora</th>
                <th scope="col">editar</th>
                <th scope="col">excluir</th>
            </tr>
            </thead>
            <tbody v-for="item in companies" :key="item.id">
                <tr>
                    <td>
                        {{ item.id}}
                    </td>
                    <td>
                        {{ item.nome_editora}}
                    </td>
                    <td>
                        <router-link class=" btn btn-primary" :to="{ name: 'editora.edit', params: { id: item.id } }">
                            Edit
                        </router-link>
                    </td>
                    <td >
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
import { onMounted } from "vue";

const { companies,companies2, getEditoras, ExcluirEditora } = RegrasEditora()
onMounted(getEditoras)

const deleteCompany = async (id) => {
    if (!window.confirm("tem certeza que deseja excluir essa editora?")) {
        return
    }
    await ExcluirEditora(id);
    await getEditoras();
}
</script>

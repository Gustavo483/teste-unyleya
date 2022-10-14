<template>
    <div class="flex1">
        <div class="DivCreate">
            <form  @submit.prevent="saveGenero">
                <div>
                    <h4 class="H4Editora bg-primary">Cadastro de gênero literário</h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="mt-3">Digite o nome do gênero:</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome_genero_literario">
                        </div>
                    </div>
                </div>
                <div class="divBtnEniar">
                    <button class="btn btn-primary BtnEniar mt-5" type="submit">
                        Cadastrar gênero
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { reactive } from "vue";
import RegrasGenero from "@/composables/generos";

const form = reactive({
    'nome_genero_literario': '',
})
const { errors, storeGenero } = RegrasGenero()
const saveGenero = async () => {
    await storeGenero({ ...form });
}
</script>

<template>
    <div class="flex1">
        <div class="DivCreate">
            <form @submit.prevent="saveEditora">
                <div>

                    <h4 class="H4Editora bg-primary">Cadastro de editora</h4>

                    <div>
                        <label for="name" class="mt-3">Digite o nome da editora:</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome_editora">
                        </div>
                        <div v-if="errors" class="">
                            <div v-for="(v, k) in errors" :key="k">
                                <p v-for="error in v" :key="error" class="coldfd">
                                    {{ error }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divBtnEniar">
                    <button class="btn btn-primary BtnEniar mt-5" type="submit">
                        Criar
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import {reactive} from "vue";
import RegrasEditora from "@/composables/editora";

const form = reactive({
    'nome_editora': '',
})
const {errors, storeEditora} = RegrasEditora()
const saveEditora = async () => {
    await storeEditora({...form});
}

</script>

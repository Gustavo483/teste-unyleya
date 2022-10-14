<template>
    <div class="flex1">
        <div class="DivCreate">
            <form @submit.prevent="saveEditora">
                <div>
                    <h4 class="H4Editora bg-primary">Edição de Editora </h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>

                    <div v-for="dado in editora" :key="dado.id">
                        <label for="name" class="mt-4">Nome da editora Salva: {{ dado.nome_editora }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome_editora" placeholder="Digite o novo nome da editora:">
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
import {onMounted, reactive} from "vue";
import RegrasEditora from "@/composables/editora";


const {getEditora, editora} = RegrasEditora()


const props = defineProps({
    id: {
        required: true,
        type: String
    },
})

onMounted(getEditora(props.id))


const form = reactive({
    'id': props.id,
    'nome_editora': '',
})

const {errors, updateEditora} = RegrasEditora()

const saveEditora = async () => {
    await updateEditora({...form});
}
</script>

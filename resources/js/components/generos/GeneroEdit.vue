<template>
    <div class="flex1">
        <div class="DivCreate">
            <form  @submit.prevent="saveGenero">
                <div>
                    <h4 class="H4Editora bg-primary">Edição de Gênero Literário </h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div v-for="dado in genero" :key="dado.id">
                        <label for="name" class="mt-4">Nome do gênero Salvo: {{dado.nome_genero_literario}}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome_genero_literario" placeholder="Digite o genero atualizado:">
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
import RegrasGenero from "@/composables/generos";


const { getGenero, genero} = RegrasGenero()


const props = defineProps({
    id: {
        required: true,
        type: String
    },
})

onMounted(getGenero(props.id))


const form = reactive({
    'id':props.id,
    'nome_genero_literario':'',
})

const { errors, updateGenero } = RegrasGenero()

const saveGenero = async () => {
    await updateGenero({ ...form});
}
</script>

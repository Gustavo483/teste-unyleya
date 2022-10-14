<template>
    <div class="flex1">
        <div class="DivCreate">
            <form @submit.prevent="saveAutor">
                <div v-for="item2 in autor" :key="item2.id">
                    <h4 class="H4Editora bg-primary">Edição de Autor </h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="mt-4">Nome Salvo: {{ item2.nome }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome" placeholder="Digite o novo nome:">
                        </div>


                        <label for="ano_nascimento" class="mt-4">Data de nascimento salva:
                            {{ item2.ano_nascimento }} </label>
                        <div class="mt-1">
                            <input class="form-control" type="number" name="ano_nascimento" id="ano_nascimento" v-model="form.ano_nascimento" placeholder="Digite o ano de nascimento:">
                        </div>

                        <label for="sexo" class="mt-4">Sexo salvo: {{ item2.sexo }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="sexo" id="sexo" v-model="form.sexo" placeholder="Digite o sexo do autor:">
                        </div>

                        <label for="nacionalidade" class="mt-4">nacionalidade salva:{{ item2.nacionalidade }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="nacionalidade" id="nacionalidade" v-model="form.nacionalidade" placeholder="Digite a nacionalidade:">
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
import RegrasAutor from "@/composables/autores";


const {getAutor, autor} = RegrasAutor()


const props = defineProps({
    id: {
        required: true,
        type: String
    },
})

onMounted(getAutor(props.id))


const form = reactive({
    'id': props.id,
    'nome': '',
    'ano_nascimento': '',
    'sexo': '',
    'nacionalidade': '',
})

const {errors, updateAutor} = RegrasAutor()

const saveAutor = async () => {
    await updateAutor({...form});
}
</script>



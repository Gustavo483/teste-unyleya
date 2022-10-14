<template>
    <div class="flex1">
        <div class="DivCreate">
            <form @submit.prevent="saveAutor">
                <div v-for="item2 in livro" :key="item2.id">
                    <h4 class="H4Editora bg-primary">Edição de livro </h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="mt-4">titulo Salvo: {{ item2.titulo }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.titulo" placeholder="Digite o novo titulo:">
                        </div>

                        <label for="name" class="mt-4">Ano de lançamento salvo: {{ item2.ano_lancamento }}</label>
                        <div class="mt-1">
                            <input class="form-control" type="number" name="name" id="name" v-model="form.ano_lancamento" placeholder="Digite o novo ano de lançamento:">
                        </div>

                        <label for="fk_autor" class="mt-3">Autor salvo: {{ item2.autores.nome }}</label>
                        <select v-model="form.fk_autor" class="form-control">
                            <option v-for="item in AutorSelect" selected="{{option == item.id}}">
                                {{ item.id }}. {{ item.nome }}
                            </option>
                        </select>

                        <label for="fk_autor" class="mt-3"> Editora Salva : {{ item2.editoras.nome_editora }}</label>
                        <select v-model="form.fk_editora" class="form-control">
                            <option v-for="item in EditoraSelect" selected="{{item.id}}">
                                {{ item.id }}. {{ item.nome_editora }}
                            </option>
                        </select>


                        <label for="name" class="mt-3">Genero Literário Salvo:
                            {{ item2.generos.nome_genero_literario }} </label>
                        <select v-model="form.fk_genero" class="form-control">
                            <option v-for="item in GeneroSelect" selected="{{option == item.id}}">
                                {{ item.id }}. {{ item.nome_genero_literario }}
                            </option>
                        </select>

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
import RegrasLivro from "@/composables/livros";


const {getlivro, livro} = RegrasLivro()


const {AutorSelect, EditoraSelect, GeneroSelect, GetDadosSelect} = RegrasLivro()
onMounted(GetDadosSelect)


const props = defineProps({
    id: {
        required: true,
        type: String
    },
})

onMounted(getlivro(props.id))


const form = reactive({
    'id': props.id,
    'titulo': '',
    'ano_lancamento': '',
    'fk_autor': '',
    'fk_editora': '',
    'fk_genero': '',
})

const {errors, updateLivro} = RegrasLivro()

const saveAutor = async () => {
    await updateLivro({...form});
}
</script>

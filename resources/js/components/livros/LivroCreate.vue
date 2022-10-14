<template>
    <div class="flex1">
        <div class="DivCreate">
            <form @submit.prevent="saveLivro">
                <div>

                    <h4 class="H4Editora bg-primary">Cadastro de livro</h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>

                    <div>
                        <label for="titulo" class="mt-3">Digite o titulo do livro:</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="titulo" id="titulo" v-model="form.titulo">
                        </div>
                    </div>

                    <div>
                        <label for="ano_lancamento" class="mt-3">Digite o ano de lançamento:</label>
                        <div class="mt-1">
                            <input class="form-control" type="number" name="ano_lancamento" id="ano_lancamento" v-model="form.ano_lancamento">
                        </div>
                    </div>

                    <label for="fk_autor" class="mt-3">Selecione o Autor:</label>
                    <select v-model="form.fk_autor" class="form-control">
                        <option v-for="item in AutorSelect" selected="{{option == item.id}}">
                            {{ item.id }}. {{ item.nome }}
                        </option>
                    </select>

                    <label for="fk_autor" class="mt-3">Selecione a editora:</label>
                    <select v-model="form.fk_editora" class="form-control">
                        <option v-for="item in EditoraSelect" selected="{{item.id}}">
                            {{ item.id }}. {{ item.nome_editora }}
                        </option>
                    </select>


                    <label for="name" class="mt-3">Selecione o genero literário </label>
                    <select v-model="form.fk_genero" class="form-control">
                        <option v-for="item in GeneroSelect" selected="{{option == item.id}}">
                            {{ item.id }}. {{ item.nome_genero_literario }}
                        </option>
                    </select>
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

const {AutorSelect, EditoraSelect, GeneroSelect, GetDadosSelect} = RegrasLivro()
onMounted(GetDadosSelect)

const form = reactive({
    'titulo': '',
    'ano_lancamento': '',
    'fk_autor': '',
    'fk_editora': '',
    'fk_genero': '',
})

const {errors, storeLivro} = RegrasLivro()
const saveLivro = async () => {
    await storeLivro({...form});
}

</script>

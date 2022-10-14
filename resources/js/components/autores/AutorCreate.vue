<template>
    <div class="flex1">
        <div class="DivCreate">
            <form  @submit.prevent="saveAutor">
                <div>

                    <h4 class="H4Editora bg-primary">Cadastro de autor</h4>
                    <div v-if="errors" class="">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="coldfd">
                                {{ error }}
                            </p>
                        </div>
                    </div>

                    <div>
                        <label for="name" class="mt-3">Digite o nome do autor:</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="name" id="name" v-model="form.nome">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="mt-3">Digite o ano de nascimento:</label>
                        <div class="mt-1">
                            <input class="form-control" type="number" name="ano_nascimento" id="ano_nascimento" v-model="form.ano_nascimento">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="mt-3">Digite o sexo autor</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="sexo" id="sexo" v-model="form.sexo">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="mt-3">Digite a nacionalidade do autor:</label>
                        <div class="mt-1">
                            <input class="form-control" type="text" name="nacionalidade" id="nacionalidade" v-model="form.nacionalidade">
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
    import { reactive } from "vue";
    import RegrasAutor from "@/composables/autores";

    const form = reactive({
        'nome': '',
        'ano_nascimento': '',
        'sexo': '',
        'nacionalidade': '',
    })
    const { errors, storeAutor } = RegrasAutor()
    const saveAutor = async () => {
        await storeAutor({ ...form });
    }
</script>

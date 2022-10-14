import {ref} from 'vue'
import axios from "axios";
import {useRouter} from 'vue-router';
import {value} from "lodash/seq";

export default function RegrasLivro() {
    const livros = ref([])
    const livro = ref([])
    const router = useRouter()
    const errors = ref('')
    const AutorSelect = ref([])
    const EditoraSelect = ref([])
    const GeneroSelect = ref([])


    const getLivros = async () => {
        let response = await axios.get('/api/livro')
        livros.value = response.data.data;

    }
    const GetDadosSelect = async () => {
        let response = await axios.get('/api/getDados')
        AutorSelect.value = response.data.AutoresSelect;
        EditoraSelect.value = response.data.EditorasSelect;
        GeneroSelect.value = response.data.GenerosSelect;
        console.log(AutorSelect)
    }

    const getlivro = async (id) => {
        let response = await axios.get('/api/livro/' + id)
        livro.value = response.data;
        console.log(livro);
    }

    const storeLivro = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/livro/', data)
            await router.push({name: 'livro.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateLivro = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/livro/update/', data)
            await router.push({name: 'livro.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const ExcluirLivro = async (id) => {
        await axios.delete('/api/livro/' + id)
    }

    return {
        livros,
        livro,
        errors,
        AutorSelect,
        EditoraSelect,
        GeneroSelect,
        getLivros,
        getlivro,
        storeLivro,
        updateLivro,
        ExcluirLivro,
        GetDadosSelect,

    }
}

import {ref} from 'vue'
import axios from "axios";
import {useRouter} from 'vue-router';

export default function RegrasEditora() {
    const editora = ref([])
    const editoras = ref([])
    const companies = ref([])
    const company = ref([])
    const router = useRouter()
    const errors = ref('')

    const getEditoras = async () => {
        let response = await axios.get('/api/editora')
        editoras.value = response.data.data;

    }

    const getEditora = async (id) => {
        let response = await axios.get('/api/editora/' + id)
        editora.value = response.data;
    }

    const storeEditora = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/editora/', data)
            await router.push({name: 'editora.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateEditora = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/editora/update/', data)
            await router.push({name: 'editora.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const ExcluirEditora = async (id) => {
        await axios.delete('/api/editora/' + id)
    }

    return {
        companies,
        editoras,
        company,
        errors,
        editora,
        getEditoras,
        getEditora,
        storeEditora,
        updateEditora,
        ExcluirEditora
    }
}

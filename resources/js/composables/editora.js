import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function RegrasEditora() {
    const editora = ref([])
    const companies = ref([])
    const companies2 = ref([])
    const company = ref([])
    const router = useRouter()
    const errors = ref('')

    const getEditoras = async () => {
        let response = await axios.get('/api/editora')
        companies.value = response.data.data;
        companies2.value = response.data.data2;
    }

    const getEditora = async (id) => {
        let response = await axios.get('/api/editora/' + id)
        company.value = response.data.data;
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

    const updateEditora = async (props,form) => {
        errors.value = ''
        try {
            await axios.put('/api/editora/' + props.id +'/'+ form.nome_editora)
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
        companies2,
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

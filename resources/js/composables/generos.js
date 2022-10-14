import {ref} from 'vue'
import axios from "axios";
import {useRouter} from 'vue-router';
import {value} from "lodash/seq";

export default function RegrasGenero() {
    const generos = ref([])
    const genero = ref([])
    const router = useRouter()
    const errors = ref('')

    const getGeneros = async () => {
        let response = await axios.get('/api/genero')
        generos.value = response.data.data;
    }

    const getGenero = async (id) => {
        let response = await axios.get('/api/genero/' + id)
        genero.value = response.data;
    }
    const storeGenero = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/genero/', data)
            await router.push({name: 'genero.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateGenero = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/genero/update/', data)
            await router.push({name: 'genero.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const ExcluirGenero = async (id) => {
        await axios.delete('/api/genero/' + id)
    }
    return {
        generos,
        genero,
        errors,
        getGeneros,
        getGenero,
        storeGenero,
        updateGenero,
        ExcluirGenero

    }
}

import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';
import {value} from "lodash/seq";

export default function RegrasAutor() {
    const autores = ref([])
    const autores2 = ref([])
    const autor = ref([])
    const router = useRouter()
    const errors = ref('')


    const getAutores = async () => {
        let response = await axios.get('/api/autor')
        autores.value = response.data.data;
    }

    const getAutor = async (id) => {
        let response = await axios.get('/api/autor/' + id)
        autor.value =response.data;
    }

    const storeAutor = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/autor/', data)
            await router.push({name: 'autor.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateAutor = async (data) => {
        errors.value = ''
        try {
            console.log(data)
            await axios.post('/api/autor/update/', data)
            await router.push({name: 'autor.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const ExcluirAutor = async (id) => {
        await axios.delete('/api/autor/' + id)
    }

    return {
        autores,
        autores2,
        autor,
        errors,
        getAutores,
        getAutor,
        storeAutor,
        updateAutor,
        ExcluirAutor

    }
}

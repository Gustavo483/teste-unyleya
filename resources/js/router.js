import {createWebHistory, createRouter} from "vue-router";

import home from './pages/home.vue';

import AutorIndex from './components/autores/AutorIndex.vue'
import AutorCreate from './components/autores/AutorCreate.vue'
import AutorEdit from './components/autores/AutorEdit.vue'

import GeneroIndex from './components/generos/GeneroIndex.vue'
import GeneroCreate from './components/generos/GeneroCreate.vue'
import GeneroEdit from './components/generos/GeneroEdit.vue'

import LivroIndex from './components/livros/LivroIndex.vue'
import LivroCreate from './components/livros/LivroCreate.vue'
import LivroEdit from './components/livros/LivroEdit.vue'

import editoraIndex from './components/editora/EditoraIndex.vue'
import editoraCreate from './components/editora/EditoraCreate.vue'
import editoraEdit from './components/editora/EditoraEdit.vue'

const routes = [
    {
        path: '/livro',
        name: 'livro.index',
        component: LivroIndex
    },
    {
        path: '/livro/create',
        name: 'livro.create',
        component: LivroCreate
    },
    {
        path: '/livro/:id/edit',
        name: 'livro.edit',
        component: LivroEdit,
        props: true
    },
    {
        path: '/',
        name: 'Home',
        component: LivroIndex
    },
    {
        path: '/genero',
        name: 'genero.index',
        component: GeneroIndex
    },
    {
        path: '/genero/create',
        name: 'genero.create',
        component: GeneroCreate
    },
    {
        path: '/genero/:id/edit',
        name: 'genero.edit',
        component: GeneroEdit,
        props: true
    },
    {
        path: '/autor',
        name: 'autor.index',
        component: AutorIndex
    },
    {
        path: '/autor/create',
        name: 'autor.create',
        component: AutorCreate
    },
    {
        path: '/autor/:id/edit',
        name: 'autor.edit',
        component: AutorEdit,
        props: true
    },
    {
        path: '/editora',
        name: 'editora.index',
        component: editoraIndex
    },
    {
        path: '/editora/create',
        name: 'editora.create',
        component: editoraCreate
    },
    {
        path: '/editora/:id/edit',
        name: 'editora.edit',
        component: editoraEdit,
        props: true
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;

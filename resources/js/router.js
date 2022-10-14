import {createWebHistory, createRouter} from "vue-router";

import home from './pages/home.vue';

import AutorIndex from './components/autores/AutorIndex.vue'
import AutorCreate from './components/autores/AutorCreate.vue'
import AutorEdit from './components/autores/AutorEdit.vue'

import editoraIndex from './components/editora/EditoraIndex.vue'
import editoraCreate from './components/editora/EditoraCreate.vue'
import editoraEdit from './components/editora/EditoraEdit.vue'

const routes = [
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

    {
        path: '/',
        name: 'Home',
        component: home
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;

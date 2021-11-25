import { createRouter, createWebHistory } from 'vue-router'

import Dashboard from '../components/Dashboard.vue'
import CategoryIndex from '../components/categories/CategoryIndex'


const routes = [
    {
        path: '/admin/dashboard',
        name: 'dashboard.index',
        component: Dashboard
    },

    {
        path: '/admin/categories',
        name: 'categories.index',
        component: CategoryIndex
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})
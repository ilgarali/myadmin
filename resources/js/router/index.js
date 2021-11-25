import { createRouter, createWebHistory } from 'vue-router'

import Dashboard from '../components/Dashboard.vue'

const routes = [
    {
        path: '/admin/dashboard',
        name: 'Dashboard.index',
        component: Dashboard
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
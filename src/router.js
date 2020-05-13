import Vue from 'vue'
import Router from 'vue-router'
import accueil from './components/Pages/accueil.vue'
import actualites from './components/Pages/actualites.vue'


Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'home',
            component: accueil
        },
        {
            path: '/actualites',
            name: 'actualites',
            component: actualites
        }

    ]
})

import {createRouter, createWebHistory} from 'vue-router'
import HomePage from '@/views/homePagina/HomePage.vue'
import PageNotFound from "@/views/layout/PageNotFound.vue";


let routes = [
    {path: '/', component: HomePage, name: 'HomePage'},
];

routes.push(
    {path: '/:pathMatch(.*)*', component: PageNotFound, name: 'PageNotFound'},
);



const router = createRouter({
    history: createWebHistory(),
    routes,
});

export { router }

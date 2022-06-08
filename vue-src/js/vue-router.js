import {createRouter, createWebHistory} from 'vue-router'
import HomePage from '@/views/HomePage.vue'
import PageNotFound from "@/views/PageNotFound.vue";


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

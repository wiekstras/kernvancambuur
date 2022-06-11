import {createRouter, createWebHistory} from 'vue-router'
import HomePage from '@/views/homePagina/HomePage.vue'
import PageNotFound from "@/views/layout/PageNotFound.vue"
import OverOnsPage from "@/views/OverOns/OverOnsPage.vue";
import LidWordenPage from "@/views/LidWorden/LidWordenPage.vue";


let routes = [
    {path: '/', component: HomePage, name: 'HomePage'},
    {path: '/over-ons', component: OverOnsPage, name: 'OverOns'},
    {path: '/lid-worden', component: LidWordenPage, name: 'LidWorden'},

];

routes.push(
    {path: '/:pathMatch(.*)*', component: PageNotFound, name: 'PageNotFound'},
);



const router = createRouter({
    history: createWebHistory(),
    routes,
});

export { router }

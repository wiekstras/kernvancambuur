import {createRouter, createWebHistory} from 'vue-router'
import HomePage from '@/views/homePagina/HomePage.vue'
import OverOnsPage from "@/views/overOns/OverOnsPage.vue";
import LidWordenPage from "@/views/lidWorden/LidWordenPage.vue";
import VrijwilligerPage from "@/views/lidWorden/VrijwilligerPage.vue";
import DonateurPage from "@/views/lidWorden/DonateurPage.vue";
import LogInPage from "@/views/logIn/LogInPage.vue";
import PageNotFound from "@/views/layout/PageNotFound.vue";
import SfeeractiesPage from "@/views/sfeeractiesPagina/sfeeractiesPage.vue";
import NieuwsBerichtenIndex from "@/views/nieuwsBerichten/index.vue";
import nieuwsBerichtenDetail from "@/views/nieuwsBerichten/nieuwsBerichtenDetail.vue";
import nieuwsBerichtenCreate from "@/views/nieuwsBerichten/nieuwsBerichtenCreate.vue";
import Dashboard from "@/views/dashboard/index.vue";
import ContactPagina from "@/views/contactPagina/ContactPagina.vue";
import NieuwBericht from "@/views/dashboard/NieuwBericht.vue";
import Berichten from "@/views/dashboard/Berichten.vue";
import Donateurs from "@/views/dashboard/Donateurs.vue";
import Vrijwilligers from "@/views/dashboard/Vrijwilligers.vue";


let routes = [
    {path: '/', component: HomePage, name: 'HomePage'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
    {path: '/nieuws-berichten', component: NieuwsBerichtenIndex, name: 'NieuwsBerichtenIndex'},
    {path: '/nieuws-berichten/:id', component: nieuwsBerichtenDetail, name: 'nieuwsBerichtenDetail'},
    {path: '/over-ons', component: OverOnsPage, name: 'OverOns'},
    {path: '/lid-worden', component: LidWordenPage, name: 'LidWorden'},
    {path: '/lid-worden/vrijwilliger-worden', component: VrijwilligerPage, name: 'VrijWilligerPage'},
    {path: '/lid-worden/donateur-worden', component: DonateurPage, name: 'DonateurPage'},
    {path: '/login', component: LogInPage, name: 'LogIn'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
    {path: '/contact', component: ContactPagina, name: 'Contact'},
    {path: '/news-create', component: nieuwsBerichtenCreate, name: 'nieuwsBerichtenCreate'},

    {
        path: '/dashboard',
        component: Dashboard,
        children: [
            {
                path: 'nieuw-bericht',
                name: 'NieuwBericht',
                component: NieuwBericht
            },
            {
                path: 'berichten',
                name: 'Berichten',
                component: Berichten
            },
            {
                path: 'donateurs',
                name: 'Donateurs',
                component: Donateurs
            },
            {
                path: 'vrijwilligers',
                name: 'Vrijwilligers',
                component: Vrijwilligers
            },
        ],
        meta:{
            hideNavbar: true
        },
    },
    
];

routes.push(
    {path: '/:pathMatch(.*)*', component: PageNotFound, name: 'PageNotFound'},
);



const router = createRouter({
    history: createWebHistory(),
    routes,
});
// Add authentication/authorization checks

import {useAuthStore} from '@/store/auth';


router.beforeEach(async (to, from) => {
    // Setup auth store and wait before navigation
    const authStore = useAuthStore()
    await authStore.initialize();

    // If the route has no meta obj, we can skip the auth checks below
    if (!to.meta) return

    // Check if we require certain auth/rights. Redirect to login if we fail
    if (to.meta.requiresAuth && !authStore.isLoggedIn) {
        console.log('Reroute!');
        return {path: '/login', query: {redirect: to.fullPath}}
    }
})


export { router }

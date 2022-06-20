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
import Dashboard from "@/views/dashboard/index.vue";


let routes = [
    {path: '/', component: HomePage, name: 'HomePage'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
    {path: '/nieuws-berichten', component: NieuwsBerichtenIndex, name: 'NieuwsBerichtenIndex'},
    {path: '/over-ons', component: OverOnsPage, name: 'OverOns'},
    {path: '/lid-worden', component: LidWordenPage, name: 'LidWorden'},
    {path: '/lid-worden/vrijwilliger-worden', component: VrijwilligerPage, name: 'VrijWilligerPage'},
    {path: '/lid-worden/donateur-worden', component: DonateurPage, name: 'DonateurPage'},
    {path: '/login', component: LogInPage, name: 'LogIn'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
    {path: '/dashboard', component: Dashboard, name: 'Dashboard'},
    {path: '/sfeeracties', component: SfeeractiesPage, name: 'SfeeractiesPage'},
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

import { createApp } from 'vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

const app = createApp(App)

//Vue router
import {router} from '@/js/vue-router.js'
app.use(router)

// Axios
import axios from 'axios'
import VueAxios from 'vue-axios'
app.use(VueAxios, axios)

import VueAgile from 'vue-agile'
app.use(VueAgile)


app.mount('#app')

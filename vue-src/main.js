import { createApp } from 'vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import './index.css'

// import "bootstrap"

const app = createApp(App)

//Vue router
import {router} from '@/js/vue-router.js'
app.use(router)

// Axios
import axios from 'axios'
import VueAxios from 'vue-axios'
app.use(VueAxios, axios)

// Pinia state management
import {createPinia} from 'pinia'

const pinia = createPinia()
app.use(pinia)

// Add global mixins
import storeMixin from './mixins/storeMixin'

app.mixin(storeMixin)

app.mount('#app')

import { createApp } from 'vue'
import App from './App.vue'

const app = createApp(App)

//Vue router
import {router} from '@/js/vue-router.js'

app.use(router)

app.mount('#app')

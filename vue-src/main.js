import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap/dist/js/bootstrap.min.js"
import { createApp } from 'vue'
import App from './App.vue'

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

//CKEditor
import CKEditor from '@ckeditor/ckeditor5-vue'

app.use(CKEditor)


app.mount('#app')

import Vue from 'vue'
import './plugins/axios'
import App from './App.vue'
import router from './router'
import store from './store'
import './registerServiceWorker'
import vuetify from './plugins/vuetify';
import VueFullPage from 'vue-fullpage.js'

Vue.config.productionTip = false

Vue.use(VueFullPage);
new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#app')

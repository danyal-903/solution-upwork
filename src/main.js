import Vue from 'vue'
import App from './App.vue'
import store from "@/store";
import 'vuesax/dist/vuesax.css' //Vuesax styles
import Vuesax from 'vuesax'

Vue.use(Vuesax)
Vue.use(store)
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  store,
}).$mount('#app')

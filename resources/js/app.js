import Vue from 'vue'
import VueRouter from 'vue-router'
import Notification from 'vue-notification'
import Firstpage from './components/firstpage'
import State1 from './components/signup/state1'
import State2 from './components/signup/state2'
import State3 from './components/signup/state3'

Vue.use(VueRouter)
Vue.use(Notification)
const routes = [
    {path:"/state1",component:State1},
    {path:"/state2",component:State2},
    {path:"/state3",component:State3}


]

const router = new VueRouter({
    routes
})
const app = new Vue({
    el: '#app',
    router,
    components:{Firstpage},
})

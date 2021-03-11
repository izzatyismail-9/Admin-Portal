require('./bootstrap');
// window.Vue = require('vue');
//
// import App from './App.vue';
// import VueRouter from 'vue-router';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
// import {routes} from './routes';
//
// Vue.use(VueRouter);
// Vue.use(VueAxios, axios);
//
// const router = new VueRouter({
//     mode: 'history',
//     routes: routes
// });
//
// const app = new Vue({
//     el: '#app',
//     router: router,
//     render: h => h(App),
// });


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

// import App from '.views/Login'
import Dashboard from '.views/Dashboard'
import App from '.views/Floor'
// import Dashboard from '.views/Dashboard'

const router = new VueRouter({
    mode: '',
    routes: [
        {
            path:'/',
            name:'Dashboard',
            component: Dashboard
        },
        {
            path:'',
            name:'Floor',
            component: Floor,
        },
    ]
})

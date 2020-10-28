require('./bootstrap');

window.Vue = require('vue');

// Config dependencies
import Router from 'vue-router';

Vue.use(Router);

// Import Components
import HomePage from "./components/HomePage";
import ItemPage from "./components/ItemPage";
import CheckoutPage from "./components/CheckoutPage";

Vue.component('site-header', require('./components/parts/SiteHeader').default);

const routes = [
    { path: '/', component: HomePage },
    { path: '/item/:id', component: ItemPage },
    { path: '/checkout/', component: CheckoutPage },
];

const router = new Router({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});

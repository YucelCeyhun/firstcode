require('./bootstrap');

window.Vue = require('vue');

import AdminSideMenu from "./components/AdminSideMenu";


const app = new Vue({
    el: '#wrapper',
    components:{
        AdminSideMenu
    }
});

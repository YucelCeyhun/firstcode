require('./bootstrap');

window.Vue = require('vue');

import AdminSideMenu from "./components/AdminSideMenu";


$(function () {
    $('.list-link').click(function () {
        $(this).next('.sub-menu').toggleClass('active');
        $(this).parent('.menu-list').toggleClass('pb-0');
    })

})

const app = new Vue({
    el: '#wrapper',
    components: {
        AdminSideMenu
    }
});


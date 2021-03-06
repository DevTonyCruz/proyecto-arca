/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({
    el: '#app',
});*/


/**
 * Librerias de terceros instaladas en este base
 */

//const Swal = window.Swal = require('sweetaler
require('datatables.net-bs4');
require('summernote');

//const Pruebas = require('./varios/pruebas')
const metisMenu = require('metismenu');
const slimscroll = require('jquery-slimscroll');
const select2 = require('select2');
const moment = window.moment = require('moment');

const custom = window.custom = require('./varios/custom');
const RequestObject = window.RequestObject = require('./varios/request');
const SepomexObject = window.SepomexObject = require('./varios/sepomex');

//Frontend

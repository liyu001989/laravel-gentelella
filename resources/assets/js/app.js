
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// css
require('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css');
require('font-awesome/css/font-awesome.css');
require('gentelella/build/css/custom.min.css');
require('switchery/switchery.css');
require('icheck/skins/flat/green.css');
require('select2/dist/css/select2.min.css');
require('../sass/app.scss');

// js
require('bootstrap-sass');
require('icheck');
require('select2');
window.Switchery = require('switchery');
require('./rest.js');
require('gentelella/build/js/custom.js');

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


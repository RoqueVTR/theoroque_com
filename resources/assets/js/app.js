
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./underscore-1.8.3');
require('./jquery.easing.min');
require('./scrolling-nav');
const WOW = require('wowjs');

$(document).ready(function() {

    setTimeout(function() {
        $("#modalShyForm").modal("show");
    }, 3000);
});
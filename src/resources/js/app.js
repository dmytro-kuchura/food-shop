/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';
// import './vendor/jquery.downCount';
// import 'jquery-ui';
// import './vendor/jquery.magnific-popup';
import './vendor/owl.carousel.min';
import './vendor/custom';

import Vue from "vue";
import Vuex from 'vuex';
import store from "./store";

Vue.use(Vuex);

import LoaderComponent from './components/LoaderComponent.vue';
import SortableComponent from './components/SortableComponent.vue';
import FilterComponent from './components/FilterComponent.vue';
import WishlistTableComponent from './components/WishlistTableComponent.vue';
import CartComponent from './components/CartComponent.vue';
import CartTableComponent from './components/CartTableComponent.vue';
import CartTotalComponent from './components/CartTotalComponent.vue';
import AddToCartComponent from './components/AddToCartComponent.vue';
import AddToCartAndWishlistComponent from './components/AddToCartAndWishlistComponent.vue';
import CheckoutComponent from './components/CheckoutComponent.vue';
import ContactsFormComponent from './components/ContactsFormComponent.vue';
import SubscribeFormComponent from './components/SubscribeFormComponent.vue';
import MessagesComponent from './components/MessagesComponent.vue';


Vue.component('loader', LoaderComponent);
Vue.component('sortable', SortableComponent);
Vue.component('filter-component', FilterComponent);
Vue.component('wishlist', WishlistTableComponent);
Vue.component('cart', CartComponent);
Vue.component('cart-list', CartTableComponent);
Vue.component('cart-total', CartTotalComponent);
Vue.component('add-to-cart', AddToCartComponent);
Vue.component('add-to-cart-and-wishlist', AddToCartAndWishlistComponent);
Vue.component('checkout', CheckoutComponent);
Vue.component('contact-us-form', ContactsFormComponent);
Vue.component('subscribe-form', SubscribeFormComponent);
Vue.component('alert-messages', MessagesComponent);

new Vue({
    el: '#app',
    store: new Vuex.Store(store)
});

function notification(text, type) {
    new Noty({
        type: type,
        layout: 'topRight',
        text: text,
        animation: {
            open: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 450, y: 0}, to: {x: 0, y: 0},
                        easing: "bounce",
                        duration: 1000,
                        bounces: 4,
                        stiffness: 3
                    })
                    .scale({
                        from: {x: 1.2, y: 1}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 4,
                        stiffness: 1
                    })
                    .scale({
                        from: {x: 1, y: 1.2}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 6,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            },
            close: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 0, y: 0}, to: {x: 450, y: 0},
                        easing: "bounce",
                        duration: 500,
                        bounces: 4,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            }
        }
    }).show();
}

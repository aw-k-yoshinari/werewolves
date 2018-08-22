/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const input = new Vue({
    el: '#input',
    components: {
        'wolf-select': require('./components/select/WolfSelect.vue'),
        'wolf-chat-input': require('./components/chat/WolfChatInput.vue'),
    },
});

const modal = new Vue({
    el: '#modal-button',
    components: {
        'modal-template': require('./components/ModalTemplate.vue'),
    },

});

const chat = new Vue({
    el: '#chat',
    components: {
        'base-text-area': require('./components/chat/BaseTextArea.vue'),
    }
});

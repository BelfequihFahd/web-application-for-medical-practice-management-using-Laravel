require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const app = new Vue({
    methods:{
        printme(){
            window.print();
        }
    }
});
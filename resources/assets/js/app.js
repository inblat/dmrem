
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Particles = require('particles.js');


let notie = require('notie');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    components:{
        // 'menu-catalog': Modal
    },
    data: {
        requestParts: {
            disabled: false,
            formData: {
                name: null,
                email: null,
                message: null
            }
        }
    },
    computed: {
        // a computed getter
    },
    methods:{
        isDisabled: function () {
            return this.requestParts.disabled;
        },
        sendRequest: function(){
            this.requestParts.disabled = true;
            axios.post('/feedback', this.requestParts.formData).then(function (response) {
                notie.alert({ type:1, text: response.data.message });
            }).catch(function (error) {
                notie.alert({ type:3, text: 'Произошла ошибка попробуйте позже' });
            });
            setTimeout(function (){
                app.requestParts.disabled = false;
                app.requestParts.formData.email = null;
                app.requestParts.formData.name = null;
                app.requestParts.formData.message = null;
            }, 3000);
        }
    }
});

$(document).ready(function () {
    var menuServices = window.document.getElementById('menu-services');
    menuServices.onclick = function(e){
        console.log(e)
    };
    initSmoothScrolling();
    if (window.location.pathname === '/') {

        particlesJS('particles-js',

            {
                "particles": {
                    "number": {
                        "value": 40,
                        "density": {
                            "enable": true,
                            "value_area": 300
                        }
                    },
                    "color": {
                        "value": "#9b9b9b"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#9b9b9b",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }

        );
    }
});

function initSmoothScrolling() {
    // Enable smooth scrolling.
    $('a[href*="#"]:not([href="#"])').click(function (e) {
        console.log(e.currentTarget.dataset.target);
        if(location.pathname !== '/') {
            location.href = '/' + e.currentTarget.dataset.target;
        }
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
}



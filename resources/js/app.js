/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import router from "./router";
import VueProgressBar from 'vue-progressbar'
import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css'
import moment from "moment";
import Multiselect from 'vue-multiselect'
import "vue-toastification/dist/index.css";
import VueContentPlaceholders from 'vue-content-placeholders'
import Swal from 'sweetalert2'

window.Swal = Swal;
Vue.use(VueContentPlaceholders)


Vue.use(Vuesax);
Vue.component("pagination", require("laravel-vue-pagination"));
window.moment = moment;
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
})
Vue.component('multiselect', Multiselect)


Vue.filter("timeformat", function(value) {
    if (value) {
        return moment
            .utc(String(value))
            .local()
            .fromNow();
    }
});
const app = new Vue({
    el: '#app',
    router,
    data() {
        return {
            primary_color: "",
        };
    },
    methods: {
        alertNotification(position = 'top-right', border, title, description) {
            const noti = this.$vs.notification({
                progress: 'auto',
                border,
                position,
                title: title,
                text: ` ${description} `
            })
        },
        alertNotificationMessage(status, res) {
            switch (status) {
                case 500:
                    this.alertNotification('top-right', 'danger', `Oops, Something Went Wrong ${status} Error! `, res.message);
                    break;
                case 422:
                    this.alertNotification('top-right', 'danger', `Oops, Unprocessable Entity ${status} Error! `, res.message);
                    break;
                case 200:
                    this.alertNotification('top-right', 'success', `response ${status} successfully! `, res);
                    break;
                default:
                    break;
            }
        },
    },
    created() {
        this.primary_color = primarycolor;
        this.$Progress.start()
            //  hook the progress bar to start before we move router-view
        this.$router.beforeEach((to, from, next) => {
                //  does the page we want to go to have a meta.progress object
                if (to.meta.progress !== undefined) {
                    let meta = to.meta.progress
                        // parse meta tags
                    this.$Progress.parseMeta(meta)
                }
                //  start the progress bar
                this.$Progress.start()
                    //  continue to next page
                next()
            })
            //  hook the progress bar to finish after we've finished moving router-view
        this.$router.afterEach((to, from) => {
            //  finish the progress bar
            this.$Progress.finish()
        })



    }

});
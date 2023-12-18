import "./bootstrap";
import Vue from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue2";
import vuetify from "./plugins/vuetify";
import repositories from "./plugins/repositories";
import DefaultLayout from "./Layouts/DefaultLayout";

createInertiaApp({
    resolve: (name) => {
        let page = require(`./Pages/${name}`);
        page.default.layout = page.default.layout || DefaultLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        Vue.use(plugin);
        Vue.use(repositories);
        Vue.mixin({
            methods: {
                route,
                emptyRoute(route) {
                    return route === "#";
                },
                numberFormat(value, currency = "NGN", maximumFractionDigits = 0) {
                    const formatter = new Intl.NumberFormat("en-NG", {
                        // style: "currency",
                        // currency: currency,

                        // These options are needed to round to whole numbers if that's what you want.
                        //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
                        maximumFractionDigits: maximumFractionDigits, // (causes 2500.99 to be printed as $2,501)
                    });
                    return formatter.format(value);
                },
                pay(from, to, currency) {
                    return `${this.numberFormat(
                        from,
                        currency
                    )} - ${this.numberFormat(to, currency)}`;
                },
            },
        });
        Vue.component("inertia-link", Link);

        new Vue({
            vuetify,
            render: (h) => h(App, props),
        }).$mount(el);
    },
});

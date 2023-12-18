import Vue from "vue";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import "@mdi/font/css/materialdesignicons.css";

Vue.use(Vuetify);

const opts = {
    theme: {
        themes: {
            light: {
                primary: "#14661C",
                secondary: "#F3E13A",
                accent: "#8c9eff",
                error: "#b71c1c",
                black: '#282828',
                grey: '#9C9898',
                yellow: '#F3E13A'
            },
        },
    },
};

export default new Vuetify(opts);

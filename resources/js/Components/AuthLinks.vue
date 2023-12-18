<template>
    <span>
        <v-menu
            bottom
            origin="center center"
            transition="scale-transition"
            v-for="(authLink, authLinkIndex) in links"
            :key="authLinkIndex"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    depressed
                    :class="`text-capitalize white--text ${
                        mobile ? 'mx-8 mb-4' : 'mx-3'
                    }`"
                    :color="authLink.color"
                    :outlined="authLink.outlined"
                    v-bind="attrs"
                    v-on="on"
                >
                    {{ authLink.label }}
                    <v-icon
                        :class="
                            authLink.outlined ? 'primary--text' : 'white--text'
                        "
                    >
                        mdi-menu-down
                    </v-icon>
                </v-btn>
            </template>

            <v-list>
                <v-list-item
                    v-for="(item, i) in authLink.items"
                    :key="i"
                    :href="route(item.route)"
                >
                    <v-list-item-title>{{ item.label }}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>
    </span>
</template>

<script>
export default {
    name: "AuthLinks",
    props: {
        links: {
            type: Array,
            default(rawProps) {
                return [];
            },
        },
        mobile: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {};
    },
};
</script>

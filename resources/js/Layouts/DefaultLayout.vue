<template>
    <v-app>
        <v-app-bar
            app
            absolute
            class="justify-center px-lg-11"
            color="white"
            height="92px"
            elevation="0"
        >
            <v-toolbar-title class="text-capitalized">
                <v-img :src="logo" contain></v-img>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <v-row class="ma-0">
                <v-col cols="12" class="">
                    <v-btn
                        v-for="(menuItem, menuItemIndex) in desktopMenuItems"
                        :key="menuItemIndex"
                        depressed
                        text
                        :class="[
                            emptyRoute(menuItem.route)
                                ? 'text-capitalize nav-btn'
                                : route().current(menuItem.route)
                                ? 'font-weight-bold text-capitalize nav-btn'
                                : 'text-capitalize nav-btn',
                        ]"
                        :color="
                            emptyRoute(menuItem.route)
                                ? 'black'
                                : route().current(menuItem.route)
                                ? 'primary'
                                : 'black'
                        "
                        :href="
                            menuItem.route === '#' ? '#' : route(menuItem.route)
                        "
                    >
                        {{ menuItem.label }}
                    </v-btn>
                </v-col>
            </v-row>

            <v-spacer></v-spacer>

            <auth-links :links="authLinks"></auth-links>

            <!-- <v-btn
                v-for="(authLink, authLinkIndex) in authLinks"
                :key="authLinkIndex"
                depressed
                :class="`mx-3 text-capitalize white--text`"
                :color="authLink.color"
                :outlined="authLink.outlined"
                :href="route(authLink.route)"
            >
                {{ authLink.label }}
            </v-btn> -->

            <v-btn
                v-if="displayMobileMenu"
                color="#090"
                depressed
                @click.stop="rightDrawer = !rightDrawer"
            >
                <v-icon class="white--text">mdi-menu</v-icon>
            </v-btn>
        </v-app-bar>
        <v-main style="padding: 92px 0px 0px">
            <slot></slot>
            <footer-links :logo="logo"></footer-links>
            <v-navigation-drawer
                v-model="rightDrawer"
                :right="right"
                temporary
                fixed
            >
                <v-list>
                    <v-list-item
                        v-for="(menuItem, menuItemIndex) in mobileMenuItems"
                        :key="menuItemIndex"
                    >
                        <v-list-item-title>
                            <v-btn
                                depressed
                                text
                                class="text-capitalize nav-btn"
                                :color="
                                    emptyRoute(menuItem.route)
                                        ? 'black'
                                        : route().current(menuItem.route)
                                        ? 'primary'
                                        : 'black'
                                "
                                :href="
                                    menuItem.route === '#'
                                        ? '#'
                                        : route(menuItem.route)
                                "
                            >
                                {{ menuItem.label }}
                            </v-btn>
                        </v-list-item-title>
                    </v-list-item>
                </v-list>
                <auth-links :links="mobileAuthLinks" :mobile="displayMobileMenu"></auth-links>
                <!-- <v-list>
                    <v-list-item
                        v-for="(authLink, authLinkIndex) in mobileAuthLinks"
                        :key="authLinkIndex"
                    >
                        <v-list-item-title>
                            <v-btn
                                depressed
                                class="mx-3 text-capitalize white--text"
                                :color="authLink.color"
                                :outlined="authLink.outlined"
                                :href="
                                    authLink.route === '#'
                                        ? '#'
                                        : route(authLink.route)
                                "
                            >
                                {{ authLink.label }}
                            </v-btn>
                        </v-list-item-title>
                    </v-list-item>
                </v-list> -->
            </v-navigation-drawer>
        </v-main>

        <v-footer
            app
            absolute
            class="justify-center px-lg-11"
            color="white"
            height="47px"
        >
            <v-row class="ma-0">
                <v-col cols="12" class="pa-0">
                    <v-divider></v-divider>
                </v-col>
                <v-col cols="12" class="px-0 d-flex justify-space-between">
                    <span
                        class="text-h6 grey--text font-weight-regular"
                        style="font-family: 'Montserrat' !important"
                    >
                        Copyright &copy; {{ new Date().getFullYear() }}
                        {{ copyright }}
                    </span>

                    <div>
                        <v-btn
                            class="grey--text text-capitalize font-weight-regular"
                            color="transparent"
                            text
                            :href="
                                emptyRoute(privacyPolicyButton.route)
                                    ? '#'
                                    : route(privacyPolicyButton.route)
                            "
                            style="font-family: 'Montserrat' !important"
                        >
                            {{ privacyPolicyButton.label }}
                        </v-btn>
                        <v-btn
                            class="grey--text text-capitalize font-weight-regular"
                            color="transparent"
                            text
                            :href="
                                emptyRoute(termsButton.route)
                                    ? '#'
                                    : route(termsButton.route)
                            "
                            style="font-family: 'Montserrat' !important"
                        >
                            {{ termsButton.label }}
                        </v-btn>
                    </div>
                </v-col>
            </v-row>
        </v-footer>
    </v-app>
</template>

<script>
import FooterLinks from "@/Components/FooterLinks.vue";
import AuthLinks from "@/Components/AuthLinks.vue";
export default {
    name: "DefaultLayout",
    components: {
        FooterLinks,
        AuthLinks
    },
    data() {
        return {
            privacyPolicyButton: {
                label: "Privacy Policy.",
                route: "#",
            },
            termsButton: {
                label: "Terms & Condition.",
                route: "#",
            },
            logo: "/images/logo.png",
            clipped: true,
            drawer: true,
            fixed: true,
            miniVariant: false,
            right: true,
            rightDrawer: false,
            auths: [
                {
                    label: "Sign In",

                    color: "primary",
                    outlined: true,
                    items: [
                        {
                            route: "front.candidate.login",
                            label: "Candidate",
                        },
                        {
                            route: "front.employee.login",
                            label: "Employer",
                        },
                    ],
                },
                {
                    label: "Register",
                    route: "front.register",
                    color: "primary",
                    outlined: false,
                    items: [
                        {
                            route: "candidate.register",
                            label: "Candidate",
                        },
                        {
                            route: "employer.register",
                            label: "Employer",
                        },
                    ],
                },
            ],
            navLinks: [
                {
                    label: "Home",
                    route: "front.home",
                },
                {
                    label: "About Us",
                    route: "front.about.us",
                },
                {
                    label: "Our Services",
                    route: "#",
                },
                {
                    label: "Companies",
                    route: "front.company.lists",
                },
                {
                    label: "Work With Us",
                    route: "#",
                },
                {
                    label: "Contact Us",
                    route: "front.contact",
                },
            ],
        };
    },
    mounted() {
        console.log(this);
        // console.log(this.$repositories);
    },
    watch: {
        displayMobileMenu(value) {
            if (!value) {
                this.closeMobileMenu();
            }
        },
    },
    computed: {
        copyright() {
            return `${this.appName}. All rights reserved.`;
        },
        contactDetails() {
            return this.displayMobileMenu ? [] : this.contacts;
        },
        authLinks() {
            return this.displayMobileMenu ? [] : this.auths;
        },
        mobileAuthLinks() {
            return this.displayMobileMenu ? this.auths : [];
        },
        mobileMenuItems() {
            return this.displayMobileMenu ? this.navLinks : [];
        },
        desktopMenuItems() {
            return this.displayMobileMenu ? [] : this.navLinks;
        },
        appName() {
            return this.$page.props.appName;
        },
        displayMobileMenu() {
            return this.$vuetify.breakpoint.mdAndDown;
        },
    },
    methods: {
        scrollUp() {
            let options = {
                duration: 300,
                offset: 0,
                easing: "easeInOutCubic",
            };
            let target = "#app";

            this.$vuetify.goTo(target, options);
        },
        closeMobileMenu() {
            this.rightDrawer = false;
        },
    },
};
</script>

<style>
.nav-btn .v-btn__content {
    font-family: Montserrat !important;
    text-align: left;
}
</style>

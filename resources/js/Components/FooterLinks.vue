<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 0px 12px 40px">
                        <v-row class="ma-0">
                            <v-col cols="4">
                                <v-row class="ma-0 pt-7">
                                    <v-col cols="12">
                                        <div
                                            class="text-h3 font-weight-bold"
                                            style="
                                                font-family: 'Archivo' !important;
                                                line-height: 70px;
                                            "
                                        >
                                            {{ heading }}
                                        </div>
                                    </v-col>
                                    <v-col cols="12">
                                        <div
                                            class="text-h6 grey--text align-center"
                                            style="
                                                font-family: 'Montserrat' !important;
                                            "
                                        >
                                            {{ subheading }}
                                        </div>
                                    </v-col>
                                </v-row>
                                <v-row class="ma-0">
                                    <v-col cols="12">
                                        <v-text-field
                                            outlined
                                            v-model="newsletterForm.email"
                                            placeholder="Enter Email Address ..."
                                            color="primary"
                                            class="newsletter-email"
                                        >
                                            <template v-slot:append>
                                                <v-fade-transition
                                                    leave-absolute
                                                    class="my-0"
                                                >
                                                    <v-progress-circular
                                                        v-if="
                                                            processingNewsletter
                                                        "
                                                        size="24"
                                                        color="primary"
                                                        indeterminate
                                                    ></v-progress-circular>
                                                    <v-btn
                                                        v-else
                                                        color="primary"
                                                        class="white--text font-weight-bold text-capitalize"
                                                    >
                                                        subscribe
                                                    </v-btn>
                                                </v-fade-transition>
                                            </template>
                                        </v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row class="ma-0">
                                    <v-col cols="12">
                                        <v-img
                                            :src="logo"
                                            width="192"
                                            height="58"
                                        ></v-img>
                                    </v-col>
                                    <v-col cols="12">
                                        <social-links
                                            color="primary"
                                        ></social-links>
                                    </v-col>
                                </v-row>
                            </v-col>
                            <v-col cols="8">
                                <v-row class="ma-0">
                                    <v-col cols="4">
                                        <v-list>
                                            <v-list-item>
                                                <v-list-item-title
                                                    class="text-h4 font-weight-bold"
                                                    style="
                                                        font-family: 'Archivo' !important;
                                                    "
                                                >
                                                    {{ jobLinks.heading }}
                                                </v-list-item-title>
                                            </v-list-item>
                                            <v-list-item
                                                v-for="(
                                                    menuItem, menuItemIndex
                                                ) in jobLinks.items"
                                                :key="menuItemIndex"
                                            >
                                                <v-list-item-content>
                                                    <v-btn
                                                        depressed
                                                        text
                                                        class="text-h6 font-weight-regular text-capitalize justify-start px-0 nav-btn"
                                                        :color="
                                                            emptyRoute(
                                                                menuItem.route
                                                            )
                                                                ? 'black'
                                                                : route().current(
                                                                      menuItem.route
                                                                  )
                                                                ? 'primary'
                                                                : 'black'
                                                        "
                                                        :href="
                                                            menuItem.route ===
                                                            '#'
                                                                ? '#'
                                                                : route(
                                                                      menuItem.route
                                                                  )
                                                        "
                                                    >
                                                        {{ menuItem.label }}
                                                    </v-btn>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-list>
                                    </v-col>
                                    <v-col cols="8">
                                        <v-row class="ma-0">
                                            <v-col cols="6" class="pt-0 mb-12">
                                                <v-list>
                                                    <v-list-item>
                                                        <v-list-item-title
                                                            class="text-h4 font-weight-bold"
                                                            style="
                                                                font-family: 'Archivo' !important;
                                                            "
                                                        >
                                                            {{ aboutLinks.heading }}
                                                        </v-list-item-title>
                                                    </v-list-item>
                                                    <v-list-item
                                                        v-for="(
                                                            menuItem, menuItemIndex
                                                        ) in aboutLinks.items"
                                                        :key="menuItemIndex"
                                                    >
                                                        <v-list-item-content>
                                                            <v-btn
                                                                depressed
                                                                text
                                                                class="text-h6 font-weight-regular text-capitalize justify-start px-0 nav-btn"
                                                                :color="
                                                                    emptyRoute(
                                                                        menuItem.route
                                                                    )
                                                                        ? 'black'
                                                                        : route().current(
                                                                              menuItem.route
                                                                          )
                                                                        ? 'primary'
                                                                        : 'black'
                                                                "
                                                                :href="
                                                                    menuItem.route ===
                                                                    '#'
                                                                        ? '#'
                                                                        : route(
                                                                              menuItem.route
                                                                          )
                                                                "
                                                            >
                                                                {{ menuItem.label }}
                                                            </v-btn>
                                                        </v-list-item-content>
                                                    </v-list-item>
                                                </v-list>
                                            </v-col>
                                            <v-col cols="6" class="pt-0 mb-12">
                                                <v-list>
                                                    <v-list-item>
                                                        <v-list-item-title
                                                            class="text-h4 font-weight-bold"
                                                            style="
                                                                font-family: 'Archivo' !important;
                                                            "
                                                        >
                                                            {{ servicesLinks.heading }}
                                                        </v-list-item-title>
                                                    </v-list-item>
                                                    <v-list-item
                                                        v-for="(
                                                            menuItem, menuItemIndex
                                                        ) in servicesLinks.items"
                                                        :key="menuItemIndex"
                                                    >
                                                        <v-list-item-content>
                                                            <v-btn
                                                                depressed
                                                                text
                                                                class="text-h6 font-weight-regular text-capitalize justify-start px-0 nav-btn"
                                                                :color="
                                                                    emptyRoute(
                                                                        menuItem.route
                                                                    )
                                                                        ? 'black'
                                                                        : route().current(
                                                                              menuItem.route
                                                                          )
                                                                        ? 'primary'
                                                                        : 'black'
                                                                "
                                                                :href="
                                                                    menuItem.route ===
                                                                    '#'
                                                                        ? '#'
                                                                        : route(
                                                                              menuItem.route
                                                                          )
                                                                "
                                                            >
                                                                {{ menuItem.label }}
                                                            </v-btn>
                                                        </v-list-item-content>
                                                    </v-list-item>
                                                </v-list>
                                            </v-col>
                                            <v-col cols="6" class="py-0">
                                                <v-list>
                                                    <v-list-item>
                                                        <v-list-item-title
                                                            class="text-h4 font-weight-bold"
                                                            style="
                                                                font-family: 'Archivo' !important;
                                                            "
                                                        >
                                                            {{ blogLinks.heading }}
                                                        </v-list-item-title>
                                                    </v-list-item>
                                                    <v-list-item
                                                        v-for="(
                                                            menuItem, menuItemIndex
                                                        ) in blogLinks.items"
                                                        :key="menuItemIndex"
                                                    >
                                                        <v-list-item-content>
                                                            <v-btn
                                                                depressed
                                                                text
                                                                class="text-h6 font-weight-regular text-capitalize justify-start px-0 nav-btn"
                                                                :color="
                                                                    emptyRoute(
                                                                        menuItem.route
                                                                    )
                                                                        ? 'black'
                                                                        : route().current(
                                                                              menuItem.route
                                                                          )
                                                                        ? 'primary'
                                                                        : 'black'
                                                                "
                                                                :href="
                                                                    menuItem.route ===
                                                                    '#'
                                                                        ? '#'
                                                                        : route(
                                                                              menuItem.route
                                                                          )
                                                                "
                                                            >
                                                                {{ menuItem.label }}
                                                            </v-btn>
                                                        </v-list-item-content>
                                                    </v-list-item>
                                                </v-list>
                                            </v-col>
                                            <v-col cols="6" class="py-0">
                                                <v-list>
                                                    <v-list-item>
                                                        <v-list-item-title
                                                            class="text-h4 font-weight-bold"
                                                            style="
                                                                font-family: 'Archivo' !important;
                                                            "
                                                        >
                                                            {{ contactLinks.heading }}
                                                        </v-list-item-title>
                                                    </v-list-item>
                                                    <v-list-item
                                                        v-for="(
                                                            menuItem, menuItemIndex
                                                        ) in contactLinks.items"
                                                        :key="menuItemIndex"
                                                    >
                                                        <v-list-item-content>
                                                            <v-btn
                                                                depressed
                                                                text
                                                                class="text-h6 font-weight-regular text-capitalize justify-start px-0 nav-btn"
                                                                :color="
                                                                    emptyRoute(
                                                                        menuItem.route
                                                                    )
                                                                        ? 'black'
                                                                        : route().current(
                                                                              menuItem.route
                                                                          )
                                                                        ? 'primary'
                                                                        : 'black'
                                                                "
                                                                :href="
                                                                    menuItem.route ===
                                                                    '#'
                                                                        ? '#'
                                                                        : route(
                                                                              menuItem.route
                                                                          )
                                                                "
                                                            >
                                                                {{ menuItem.label }}
                                                            </v-btn>
                                                        </v-list-item-content>
                                                    </v-list-item>
                                                </v-list>
                                            </v-col>
                                        </v-row>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>
    </v-sheet>
</template>

<script>
import SocialLinks from "@/Components/SocialLinks.vue";
export default {
    name: "FooterLinks",
    components: {
        SocialLinks,
    },
    props: {
        logo: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            heading: "Stay Updated",
            subheading:
                "Stay up-to-date with the latest job listings and career tips from our newsletter.",
            newsletterForm: {
                email: "",
            },
            processingNewsletter: false,
            jobLinks: {
                heading: "Jobs",
                items: [
                    {
                        label: "IT Development",
                        route: "#",
                    },
                    {
                        label: "Finance",
                        route: "#",
                    },
                    {
                        label: "Healthcare",
                        route: "#",
                    },
                    {
                        label: "Sales & Marketing",
                        route: "#",
                    },
                    {
                        label: "Education",
                        route: "#",
                    },
                    {
                        label: "Design",
                        route: "#",
                    },
                    {
                        label: "Research",
                        route: "#",
                    },
                    {
                        label: "Human Resources",
                        route: "#",
                    },
                    {
                        label: "Freelance",
                        route: "#",
                    },
                    {
                        label: "Jobs For You",
                        route: "#",
                    },
                ],
            },
            aboutLinks: {
                heading: "About",
                items: [
                    {
                        label: "About Us",
                        route: "#",
                    },
                    {
                        label: "History",
                        route: "#",
                    },
                    {
                        label: "Our Team",
                        route: "#",
                    },
                    {
                        label: "Testimonials",
                        route: "#",
                    },
                ],
            },
            servicesLinks: {
                heading: "Services",
                items: [
                    {
                        label: "For Employee",
                        route: "#",
                    },
                    {
                        label: "For Employer",
                        route: "#",
                    },
                    {
                        label: "Support",
                        route: "#",
                    },
                ],
            },
            blogLinks: {
                heading: "Blog",
                items: [
                    {
                        label: "News",
                        route: "#",
                    },
                    {
                        label: "Tips",
                        route: "#",
                    },
                    {
                        label: "Events",
                        route: "#",
                    },
                ],
            },
            contactLinks: {
                heading: "Contact",
                items: [
                    {
                        label: "Phone",
                        route: "#",
                    },
                    {
                        label: "Email",
                        route: "#",
                    },
                    {
                        label: "Social Media",
                        route: "#",
                    },
                ],
            },
        };
    },
    methods: {
    }
};
</script>
<style>
.newsletter-email .v-input__append-inner {
    margin: 0;
    padding: 10px;
}
</style>

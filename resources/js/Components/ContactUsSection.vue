<template>
    <v-sheet class="contact-us-section" style="padding-top: 80px; padding-bottom: 100px;">
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12">
                        <v-row>
                            <v-col cols="7">
                                <div
                                    class="text-h2 white--text font-weight-bold"
                                    style="font-family: 'Archivo' !important"
                                >
                                    {{ heading }}
                                </div>
                            </v-col>
                            <v-col cols="6">
                                <div
                                    class="text-h5 yellow--text font-weight-medium"
                                    style="font-family: 'Poppins' !important"
                                >
                                    {{ subheading }}
                                </div>
                            </v-col>
                            <v-col cols="7">
                                <v-btn
                                    depressed
                                    large
                                    class="text-capitalize font-weight-bold"
                                    color="primary"
                                    :href="
                                        contactUsButton.route === '#'
                                            ? '#'
                                            : route(contactUsButton.route)
                                    "
                                    style="font-family:'Archivo' !important;"
                                >
                                    {{ contactUsButton.label }}
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>
    </v-sheet>
</template>
<script>
export default {
    name: "ContactUsSection",
    data() {
        return {
            heading: "Ready to take the next step in your career?",
            subheading:
                "Join ImoJobs today and start exploring exciting job opportunities with top companies.",
            contactUsButton: {
                label: "Contact Us",
                route: "#",
            },
        };
    },
};
</script>
<style>
.v-main .contact-us-section {
    /** background: linear-gradient(103.92deg, #000000 50%, rgba(0, 0, 0, 0) 70%),
        url("/images/banner.png"), #d9d9d9 !important; **/
    background: url("/images/contact-us-section-bg.png");
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;

    /*background-image:
    linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
    url('/images/banner.jpg') !important;*/
}
</style>

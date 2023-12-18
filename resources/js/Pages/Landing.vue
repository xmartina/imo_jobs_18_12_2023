<template>
    <div>
        <app-head title="Home"></app-head>
        <banner></banner>

        <v-sheet>
            <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
                <v-container fluid class="px-4">
                    <v-row class="ma-0">
                        <v-col
                            cols="12"
                            style="padding: 0px 12px 80px; margin-top: -80px"
                        >
                            <v-card color="primary" class="pa-15">
                                <v-row class="ma-0 justify-space-around">
                                    <v-col
                                        cols="2"
                                        class="white--text"
                                        v-for="(offer, offerIndex) in offers"
                                        :key="offerIndex"
                                        style="border: 1px solid white"
                                    >
                                        <div
                                            class="text-h4"
                                            style="
                                                font-family: 'Poppins' !important;
                                            "
                                        >
                                            {{ offer.title }}
                                        </div>
                                        <div
                                            class="text-h5 text-capitalize"
                                            style="
                                                font-family: 'Poppins' !important;
                                            "
                                        >
                                            {{ offer.subtitle }}
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-card>
                        </v-col>
                    </v-row>
                    <v-row class="mx-0 mt-14">
                        <v-col cols="12">
                            <v-row class="ma-0 justify-space-between">
                                <v-col cols="5" class="pa-0">
                                    <v-img
                                        :src="highStandardImage"
                                        contain
                                    ></v-img>
                                </v-col>
                                <v-col cols="6" class="pa-0">
                                    <div
                                        class="text-h3 font-weight-bold"
                                        style="
                                            font-family: 'Archivo' !important;
                                            line-height: 70px;
                                        "
                                    >
                                        How We
                                        <span class="primary--text"
                                            >Maintain a High Standard</span
                                        >
                                        of Trust and Excellence
                                    </div>
                                    <v-list class="mb-12">
                                        <v-list-item
                                            v-for="(
                                                trustStandard,
                                                trustStandardIndex
                                            ) in trustStandards"
                                            :key="trustStandardIndex"
                                            class="px-0"
                                        >
                                            <v-list-item-icon>
                                                <v-icon color="primary"
                                                    >mdi-plus</v-icon
                                                >
                                            </v-list-item-icon>

                                            <v-list-item-content>
                                                {{ trustStandard }}
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>

                                    <v-btn
                                        depressed
                                        text
                                        plain
                                        class='text-decoration-underline px-0 font-weight-bold text-capitalize black--text learn-more-btn'
                                        :href="
                                            learnMoreButton.route === '#'
                                                ? '#'
                                                : route(learnMoreButton.route)
                                        "
                                    >
                                        {{ learnMoreButton.label }}
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-container>
            </v-sheet>
        </v-sheet>

        <featured-jobs :jobs="featuredJobs"></featured-jobs>
        <top-companies></top-companies>
        <imo-residents></imo-residents>
        <job-categories></job-categories>
        <contact-us-section></contact-us-section>
        <blog-posts></blog-posts>
        <popular-jobs :jobs="popularJobs"></popular-jobs>
        <frequently-asked-questions></frequently-asked-questions>
    </div>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout";
import Banner from "@/Components/Banner.vue";
import FeaturedJobs from "@/Components/FeaturedJobs.vue";
import TopCompanies from "@/Components/TopCompanies.vue";
import ImoResidents from "@/Components/ImoResidents.vue";
import JobCategories from "@/Components/JobCategories.vue";
import AppHead from '@/Components/AppHead.vue';
import ContactUsSection from '@/Components/ContactUsSection.vue';
import BlogPosts from '@/Components/BlogPosts.vue';
import PopularJobs from '@/Components/PopularJobs.vue';
import FrequentlyAskedQuestions from '@/Components/FrequentlyAskedQuestions.vue';

export default {
    props: ["popularJobs", "featuredJobs"],
    components: {
        DefaultLayout,
        Banner,
        FeaturedJobs,
        TopCompanies,
        ImoResidents,
        JobCategories,
        AppHead,
        ContactUsSection,
        BlogPosts,
        PopularJobs,
        FrequentlyAskedQuestions
    },
    data() {
        return {
            offers: [
                {
                    title: "10,000+",
                    subtitle: "jobs",
                },
                {
                    title: "10,000+",
                    subtitle: "candidates",
                },
                {
                    title: "1,000+",
                    subtitle: "companies",
                },
                {
                    title: "40,000+",
                    subtitle: "employed",
                },
            ],
            highStandardImage: "/images/high-standard.png",
            trustStandards: [
                "On Imo Jobs, everyone is vetted, both employers and jobseekers to ensure they meet our standards",
                "We dig very dip to avail the best opportunities for both employers and jobseeker to achieve their positive aspirations",
                "We provide expert services to employers to help them get the best hands to work with",
                "We provide the training and support to jobseekers to get your dream job",
                "Endorsed and launched by the Government of Imo State",
            ],
            learnMoreButton: {
                label: "Learn More About Us",
                route: "front.about.us",
            },
        };
    },
};
</script>
<style>
.learn-more-btn .v-btn__content{
    font-family: 'Archivo' !important;
}
</style>

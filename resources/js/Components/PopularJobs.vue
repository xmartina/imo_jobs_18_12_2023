<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12">
                        <v-row class="ma-0">
                            <v-col cols="12">
                                <v-row class="ma-0 justify-center">
                                    <v-col cols="12">
                                        <div
                                            class="text-h3 text-center font-weight-bold"
                                            style="
                                                font-family: 'Archivo' !important;
                                                line-height: 70px;
                                            "
                                        >
                                            {{ heading }}
                                        </div>
                                    </v-col>
                                    <v-col cols="3">
                                        <v-autocomplete
                                            v-model="jobTag"
                                            :items="tags"
                                            class="primary--text text-center"
                                            item-color="primary"
                                            item-text="name"
                                            item-value="id"
                                            hide-details
                                        >
                                            <template v-slot:selection="data">
                                                <span
                                                    class="primary--text font-weight-bold text-h4"
                                                    v-bind="data.attrs"
                                                    :input-value="data.selected"
                                                    @click="data.select"
                                                    style="
                                                        font-family: 'Archivo' !important;
                                                    "
                                                >
                                                    {{ data.item.name }}
                                                </span>
                                            </template>
                                        </v-autocomplete>
                                    </v-col>
                                </v-row>
                            </v-col>
                            <v-col cols="12">
                                <v-row class="ma-0 justify-center">
                                    <v-col cols="8">
                                        <div
                                            class="text-h6 grey--text text-center"
                                            style="
                                                font-family: 'Montserrat' !important;
                                            "
                                        >
                                            {{ subheading }}
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-col>
                            <v-col cols="12">
                                <job-list :jobs="jobs"></job-list>
                                <!-- <v-row class="mx-0 mb-0">
                                    <v-col
                                        cols="4"
                                        v-for="(job, jobIndex) in jobs"
                                        :key="jobIndex"
                                    >
                                        <v-card
                                            max-width="380"
                                            height="460"
                                            elevation="10"
                                            class="pa-6"
                                        >
                                            <v-card-title
                                                class="px-0 text-h5 font-weight-bold"
                                                style="
                                                    font-size: 20px !important;
                                                    font-family: 'Archivo' !important;
                                                "
                                            >
                                                {{ job.title }}
                                            </v-card-title>
                                            <v-card-text class="d-flex px-0">
                                                <v-avatar size="30" rounded>
                                                    <v-img
                                                        :src="job.company.logo"
                                                    ></v-img>
                                                </v-avatar>
                                                <div
                                                    class="text-body-1 font-weight-normal pl-3"
                                                    style="
                                                        font-family: 'Montserrat' !important;
                                                    "
                                                >
                                                    {{ job.company.name }}
                                                </div>
                                            </v-card-text>
                                            <v-card-text class="px-0 py-0">
                                                <v-btn
                                                    depressed
                                                    color="primary lighten-5 primary--text"
                                                    class="text-capitalize"
                                                    href="#"
                                                >
                                                    {{ job.type }}
                                                </v-btn>
                                            </v-card-text>
                                            <v-list flat>
                                                <v-list-item
                                                    v-for="(
                                                        item, i
                                                    ) in job.qualifications"
                                                    :key="i"
                                                    class="px-0"
                                                    dense
                                                >
                                                    <v-list-item-icon
                                                        class="mr-0"
                                                    >
                                                        <v-icon>
                                                            mdi-circle-small
                                                        </v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content
                                                        class="grey--text"
                                                        v-text="item"
                                                        style="
                                                            font-family: 'Montserrat' !important;
                                                            font-size: 14px !important;
                                                        "
                                                    >
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>
                                            <v-card-text class="pa-0">
                                                <div
                                                    style="
                                                        font-family: 'Montserrat' !important;
                                                    "
                                                >
                                                    <v-icon
                                                        >mdi-map-marker</v-icon
                                                    >
                                                    {{ job.company.location }}
                                                </div>
                                                <div
                                                    style="
                                                        font-family: 'Montserrat' !important;
                                                    "
                                                >
                                                    <v-icon
                                                        >mdi-currency-ngn</v-icon
                                                    >
                                                    {{ job.pay }}
                                                    {{ job.payType }}
                                                </div>
                                            </v-card-text>
                                            <v-card-actions class="pt-6 px-0">
                                                <v-btn
                                                    depressed
                                                    x-large
                                                    color="primary"
                                                    class="font-weight-bold text-capitalize white--text px-6 px-lg-8"
                                                    :href="
                                                        job.route === '#'
                                                            ? '#'
                                                            : route(job.route)
                                                    "
                                                >
                                                    Apply This Job
                                                </v-btn>
                                                <v-btn
                                                    depressed
                                                    x-large
                                                    outlined
                                                    color="primary"
                                                    class="font-weight-bold text-capitalize white--text"
                                                    href="#"
                                                >
                                                    <v-icon>
                                                        mdi-bookmark-outline
                                                    </v-icon>
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>
                                </v-row> -->
                                <v-row>
                                    <v-col cols="12" class="d-flex justify-center" style="padding: 80px 12px 50px;">
                                        <v-btn
                                            depressed
                                            text
                                            plain
                                            class="text-h6 text-decoration-underline px-0 font-weight-bold text-capitalize black--text learn-more-btn"
                                            style="font-family: 'Archivo' !important;"
                                            :href="
                                                viewAllPopularJobsButton.route === '#'
                                                    ? '#'
                                                    : route(
                                                          viewAllPopularJobsButton.route
                                                      )
                                            "
                                        >
                                            {{ viewAllPopularJobsButton.label }}
                                        </v-btn>
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
import JobList from '@/Components/JobList'
export default {
    name: "PopularJobs",
    components: {
        JobList,
    },
    props: {
        jobs: {
            type: Array,
            required: true
        }
    },
    data() {
        return {
            heading: "Most Popular Job in",
            subheading:
                "Find the best paying jobs based on the job category. 100% safe recruitment process with transparent progress and real-time assessment.",
            jobTag: 1,
            tags: [
                {
                    id: 1,
                    name: "UI Designer",
                },
            ],
            // jobs: [
            //     {
            //         company: {
            //             name: "ITIC Company",
            //             logo: "/images/company-logo1.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Software Developer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "90,000 - 200,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            //     {
            //         company: {
            //             name: "Tesla Company",
            //             logo: "/images/company-logo2.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Product Designer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "100,000 - 300,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            //     {
            //         company: {
            //             name: "ITIC Company",
            //             logo: "/images/company-logo1.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Software Developer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "90,000 - 200,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            //     {
            //         company: {
            //             name: "Tesla Company",
            //             logo: "/images/company-logo2.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Product Designer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "100,000 - 300,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            //     {
            //         company: {
            //             name: "ITIC Company",
            //             logo: "/images/company-logo1.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Software Developer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "90,000 - 200,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            //     {
            //         company: {
            //             name: "Tesla Company",
            //             logo: "/images/company-logo2.jpg",
            //             location: "Imo State",
            //         },
            //         title: "Product Designer",
            //         description:
            //             "Develop and maintain software applications and programs for our clients using various programming languages and platforms.",
            //         type: "Full Time",
            //         date: "Mar 3, 2023",
            //         pay: "100,000 - 300,000",
            //         payType: "per year",
            //         closes: "25",
            //         route: "#",
            //         qualifications: [
            //             "Bachelor's degree in design or related",
            //             "5+ years of experience in UI design",
            //             "Proficiency in Adobe Creative Suite",
            //         ],
            //     },
            // ],
            viewAllPopularJobsButton: {
                label: 'View All Popular Jobs',
                route: '#'
            }
        };
    },
    computed: {},
};
</script>

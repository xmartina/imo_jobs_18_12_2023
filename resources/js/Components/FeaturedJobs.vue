<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 0px 12px 40px">
                        <v-row class="ma-0">
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
                                <v-row>
                                    <v-col cols="7">
                                        <div
                                            class="text-h6 grey--text align-center"
                                            style="
                                                font-family: 'Montserrat' !important;
                                            "
                                        >
                                            {{ subheading }}
                                        </div>
                                    </v-col>
                                    <v-col cols="5">
                                        <template>
                                            <v-tabs v-model="jobTab">
                                                <v-tab
                                                    v-for="(
                                                        jobTab, jobTabIndex
                                                    ) in jobTabs"
                                                    :key="jobTabIndex"
                                                    class="pa-0 font-weight-bold"
                                                    style="
                                                        font-family: 'Montserrat' !important;
                                                    "
                                                >
                                                    0{{ jobTab }}
                                                </v-tab>
                                            </v-tabs>
                                        </template>
                                    </v-col>
                                </v-row>
                            </v-col>
                            <v-col cols="12">
                                <v-tabs-items v-model="jobTab">
                                    <v-tab-item
                                        v-for="(item, itemIndex) in jobTabs"
                                        :key="itemIndex"
                                    >
                                        <v-row class="ma-0">
                                            <v-col
                                                cols="6"
                                                v-for="(
                                                    job, jobIndex
                                                ) in dynamicJobs"
                                                :key="`${job.job_title}${jobIndex}`"
                                                class="px-0"
                                                :style="
                                                    jobIndex === 0
                                                        ? ''
                                                        : 'padding: 150px 0px 30px;'
                                                "
                                            >
                                                <v-card
                                                    elevation="20"
                                                    class="pa-6 mr-4"
                                                    style="border: 1px solid #14661c;"
                                                >
                                                    <v-row class="ma-0">
                                                        <v-col
                                                            cols="8"
                                                            class="px-0"
                                                        >
                                                            <v-row class="ma-0">
                                                                <v-col
                                                                    class="d-flex px-0 justify-space-between"
                                                                >
                                                                    <v-avatar
                                                                        class="ma-0"
                                                                        size="100"
                                                                        rounded
                                                                    >
                                                                        <v-img
                                                                            :src="
                                                                                job
                                                                                    .company
                                                                                    .company_url
                                                                            "
                                                                        ></v-img>
                                                                    </v-avatar>
                                                                    <v-card-text
                                                                        class="py-0"
                                                                    >
                                                                        <div
                                                                            class="text-h6 font-weight-bold"
                                                                            style="
                                                                                font-family: 'Archivo' !important;
                                                                            "
                                                                        >
                                                                            {{
                                                                                job
                                                                                    .company
                                                                                    .name
                                                                            }}
                                                                        </div>
                                                                        <div
                                                                            class=""
                                                                            style="
                                                                                font-family: 'Montserrat' !important;
                                                                            "
                                                                        >
                                                                            {{
                                                                                job.posted_at
                                                                            }}
                                                                        </div>
                                                                        <div
                                                                            style="
                                                                                font-family: 'Montserrat' !important;
                                                                            "
                                                                        >
                                                                            <v-icon
                                                                                >mdi-map-marker</v-icon
                                                                            >
                                                                            {{
                                                                                job
                                                                                    .company
                                                                                    .location
                                                                            }}
                                                                        </div>
                                                                        <div
                                                                            style="
                                                                                font-family: 'Montserrat' !important;
                                                                            "
                                                                        >
                                                                            <v-icon>
                                                                                mdi-currency-ngn
                                                                            </v-icon>
                                                                            {{
                                                                                pay(
                                                                                    job.salary_from,
                                                                                    job.salary_to,
                                                                                    job
                                                                                        .currency
                                                                                        .currency_code
                                                                                )
                                                                            }}
                                                                            {{
                                                                                job
                                                                                    .salary_period
                                                                                    .period
                                                                            }}
                                                                        </div>
                                                                    </v-card-text>
                                                                </v-col>
                                                            </v-row>
                                                            <v-row class="ma-0">
                                                                <v-card-title
                                                                    class="font-weight-bold px-0"
                                                                    style="
                                                                        font-family: 'Archivo' !important;
                                                                    "
                                                                >
                                                                    {{
                                                                        job.job_title
                                                                    }}
                                                                </v-card-title>
                                                                <v-card-text
                                                                    class="px-0 pb-0"
                                                                >
                                                                    <v-btn
                                                                        depressed
                                                                        plain
                                                                        class="primary lighten-5 primary--text text-capitalize"
                                                                    >
                                                                        {{
                                                                            job
                                                                                .job_shift
                                                                                .shift
                                                                        }}
                                                                    </v-btn>
                                                                </v-card-text>
                                                                <v-card-text
                                                                    class="px-0 grey--text"
                                                                    style="
                                                                        font-family: 'Montserrat' !important;
                                                                    "
                                                                    v-html="
                                                                        job.description
                                                                    "
                                                                ></v-card-text>
                                                            </v-row>
                                                        </v-col>
                                                        <v-col
                                                            cols="4"
                                                            class="pa-3 mt-6 rounded"
                                                            style="
                                                                border: 1px
                                                                    solid
                                                                    #14661c;
                                                            "
                                                        >
                                                            <v-row class="ma-0">
                                                                <v-col
                                                                    cols="12"
                                                                    class="px-0"
                                                                >
                                                                    <div
                                                                        class="text-subtitle-1 font-weight-bold text-center"
                                                                        style="
                                                                            font-family: 'Montserrat' !important;
                                                                        "
                                                                    >
                                                                        Job
                                                                        Closed
                                                                        in
                                                                    </div>
                                                                </v-col>
                                                                <v-col
                                                                    cols="12"
                                                                    class="px-0"
                                                                >
                                                                    <div
                                                                        class="text-h1 font-weight-bold primary--text text-center"
                                                                        style="
                                                                            font-family: 'Archivo' !important;
                                                                        "
                                                                    >
                                                                        {{
                                                                            job.closes_in_days
                                                                        }}
                                                                    </div>
                                                                </v-col>
                                                                <v-col
                                                                    cols="12"
                                                                    class="px-0"
                                                                >
                                                                    <div
                                                                        class="text-uppercase grey--text text-center"
                                                                        style="
                                                                            letter-spacing: 12px;
                                                                            font-family: 'Montserrat' !important;
                                                                        "
                                                                    >
                                                                        days
                                                                    </div>
                                                                </v-col>
                                                                <v-col
                                                                    cols="12"
                                                                    class="px-0 mt-6 d-flex justify-center"
                                                                >
                                                                    <v-btn
                                                                        depressed
                                                                        large
                                                                        color="primary"
                                                                        class="white--text font-weight-bold text-capitalize"
                                                                        :href="
                                                                            route(
                                                                                'front.job.details',
                                                                                job.job_id
                                                                            )
                                                                        "
                                                                    >
                                                                        Apply
                                                                        Now
                                                                    </v-btn>
                                                                </v-col>
                                                            </v-row>
                                                        </v-col>
                                                    </v-row>
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                    </v-tab-item>
                                </v-tabs-items>
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
    name: "FeaturedJobs",
    props: {
        jobs: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            heading: "Featured Jobs",
            subheading:
                "Our current top picks for your dream career based on our current popular listing.",
            jobTabs: [1, 2, 3, 4, 5],
            jobTab: 0,
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
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
            //         route: '#'
            //     },
            // ],
        };
    },
    computed: {
        dynamicJobs() {
            if (this.jobTab !== null) {
                let firstJob = this.jobs[this.jobTab * 2];
                let secondJob = this.jobs[this.jobTab * 2 + 1];
                let jobs = [];

                if (firstJob !== null && firstJob !== undefined) {
                    jobs.push(firstJob);
                }
                if (secondJob !== null && secondJob !== undefined) {
                    jobs.push(secondJob);
                }

                return jobs;
            }

            return [];
        },
    },
};
</script>

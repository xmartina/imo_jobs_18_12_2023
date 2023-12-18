<template>
    <v-sheet color="grey lighten-3">
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
                            <v-col cols="12" style="padding-bottom: 80px;">
                                <v-row class="ma-0">
                                    <v-col
                                        cols="6"
                                        v-for="(faq, faqIndex) in faqs"
                                        :key="faqIndex"
                                    >
                                        <v-expansion-panels>
                                            <v-expansion-panel>
                                                <v-expansion-panel-header class="text-h6 font-weight-bold" style="font-family: 'Archivo' !important;">
                                                    <template v-slot:actions>
                                                        <v-icon color="primary">
                                                          mdi-plus
                                                        </v-icon>
                                                      </template>
                                                    {{ faq.question }}
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <span style="font-family: 'Montserrat' !important;">
                                                        {{ faq.answer }}
                                                    </span>
                                                </v-expansion-panel-content>
                                            </v-expansion-panel>
                                        </v-expansion-panels>
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
export default {
    name: "FrequentlyAskedQuestions",
    data() {
        return {
            heading: "FAQ",
            subheading: "Frequently asked questions about our services.",
            faqs: [
                {
                    question: "How do I search for jobs on ImoJobs?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "What type of jobs are listed on ImoJobs?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "Can I apply for jobs outside of my location?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "Can I save job listings to apply later?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "How do I know if a job listing is still open?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "Can I save job listings to apply later?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "How do I create a ImoJobs account?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
                {
                    question: "Are all job listings on ImoJobs verified?",
                    answer: "To search for jobs on ImoJobs, simply navigate to the homepage and enter your criteria in the search bar at the top of the page. You can enter keywords related to  salary range. After that, click the Search button to begin your job hunting journey.",
                },
            ],
        };
    },
    computed: {},
};
</script>

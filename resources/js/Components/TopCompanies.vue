<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4 pt-6">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 0px 12px 80px">
                        <div
                            class="text-h3 font-weight-bold text-center"
                            style="font-family: 'Archivo' !important"
                        >
                            {{ heading }}
                        </div>
                        <div
                            class="grey--text text-center mt-8"
                            style="font-family: 'Montserrat' !important"
                        >
                            {{ subheading }}
                        </div>
                        <v-row class="ma-0">
                            <v-col
                                cols="4"
                                v-for="(company, companyIndex) in companies"
                                :key="companyIndex"
                            >
                                <v-card class="pa-6">
                                    <v-row class="ma-0">
                                        <v-col
                                            cols="12"
                                            class="d-flex px-0 justify-space-between"
                                        >
                                            <v-avatar
                                                class="ma-0"
                                                size="80"
                                                rounded
                                            >
                                                <v-img
                                                    :src="company.logo"
                                                ></v-img>
                                            </v-avatar>
                                            <v-card-text class="py-0">
                                                <div
                                                    class="text-h5 font-weight-bold"
                                                    style="
                                                        font-family: 'Archivo' !important;
                                                    "
                                                >
                                                    {{ company.name }}
                                                </div>
                                                <v-rating
                                                    dense
                                                    color="yellow accent-4"
                                                    :value="company.rating"
                                                    small
                                                ></v-rating>
                                                <!-- <div>
                                                </div> -->
                                            </v-card-text>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            class="pa-0 grey--text mt-6 d-flex justify-space-between"
                                        >
                                            <span
                                                style="
                                                    font-family: 'Montserrat' !important;
                                                "
                                            >
                                                <v-icon>
                                                    mdi-account-outline
                                                </v-icon>
                                                {{ company.employees }}
                                            </span>
                                            <span
                                                style="
                                                    font-family: 'Montserrat' !important;
                                                "
                                            >
                                                {{ company.openings }} jobs open
                                            </span>
                                        </v-col>
                                    </v-row>
                                </v-card>
                            </v-col>
                        </v-row>
                        <v-row class="ma-0">
                            <v-col cols="12" class="pt-13 d-flex justify-center">
                                <v-btn
                                    depressed
                                    text
                                    plain
                                    class="text-h5 text-decoration-underline px-0 font-weight-bold text-capitalize black--text learn-more-btn"
                                    :href="
                                        viewAllCompaniesButton.route === '#'
                                            ? '#'
                                            : route(
                                                  viewAllCompaniesButton.route
                                              )
                                    "
                                    style="font-family: 'Archivo' !important;"
                                >
                                    {{ viewAllCompaniesButton.label }}
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
    name: "TopCompanies",
    data() {
        return {
            heading: "Top Companies",
            subheading:
                "Explore and find the dream job opportunities with our best companies and employers.",
            companies: [
                {
                    name: "TechWorks Incorporation",
                    logo: "/images/top-company1.jpg",
                    rating: 4,
                    employees: "1,235",
                    openings: "8",
                },
                {
                    name: "Bright Future Solutions",
                    logo: "/images/top-company2.jpg",
                    rating: 4,
                    employees: "3,567",
                    openings: "20",
                },
                {
                    name: "SkyView Enterprises",
                    logo: "/images/top-company3.jpg",
                    rating: 4,
                    employees: "7,824",
                    openings: "14",
                },
                {
                    name: "Health Wave Innovations",
                    logo: "/images/top-company4.jpg",
                    rating: 4,
                    employees: "2,346",
                    openings: "10",
                },
                {
                    name: "Marketing Genius Co.",
                    logo: "/images/top-company5.jpg",
                    rating: 4,
                    employees: "812",
                    openings: "3",
                },
                {
                    name: "Interface Design Group",
                    logo: "/images/top-company6.jpg",
                    rating: 4,
                    employees: "4,512",
                    openings: "16",
                },
            ],
            viewAllCompaniesButton: {
                label: "View All Verified Companies",
                route: "#",
            },
        };
    },
};
</script>

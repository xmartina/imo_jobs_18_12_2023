<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4 pt-6">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 0px 12px 80px">
                        <v-row class="ma-0 justify-center">
                            <v-col cols="4">
                                <div
                                    class="text-h3 text-center font-weight-bold"
                                    style="font-family: 'Archivo' !important"
                                >
                                    {{ heading }}
                                </div>
                            </v-col>
                            <v-col
                                cols="10"
                                class="grey--text text-center"
                                style="font-family: 'Montserrat' !important"
                            >
                                {{ subheading }}
                            </v-col>
                        </v-row>
                        <v-row class="mx-0 mb-0 mt-6">
                            <v-col
                                cols="3"
                                v-for="(
                                    category, categoryIndex
                                ) in jobCategories"
                                :key="categoryIndex"
                            >
                                <v-card class="d-flex" flat>
                                    <v-avatar size="69" class="ma-0" rounded>
                                        <v-img :src="category.image"></v-img>
                                    </v-avatar>
                                    <div class="ml-4">
                                        <v-btn
                                            text
                                            plain
                                            class="text-subtitle-1 text-capitalize px-0 font-weight-bold"
                                            style="
                                                font-family: 'Archivo' !important;
                                            "
                                            depressed
                                            :href="
                                                category.route === '#'
                                                    ? '#'
                                                    : route(category.route)
                                            "
                                        >
                                            {{ category.name }}
                                        </v-btn>
                                        <div
                                            class="grey--text mt-3"
                                            style="
                                                font-family: 'Montserrat' !important;
                                            "
                                        >
                                            {{ category.openings }} open jobs
                                        </div>
                                    </div>
                                </v-card>
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
    name: "ImoResidents",
    data() {
        return {
            heading: "Explore our Job Categories",
            subheading:
                "Get started by looking at our job categories. Hundreds of new jobs everyday!",
            jobCategories: [
                {
                    name: "IT Development",
                    image: "/images/cat1.png",
                    route: "#",
                    openings: "3,450",
                },
                {
                    name: "Finance",
                    image: "/images/cat2.png",
                    route: "#",
                    openings: "1,956",
                },
                {
                    name: "Healthcare",
                    image: "/images/cat3.png",
                    route: "#",
                    openings: "2,812",
                },
                {
                    name: "Sales & Marketing",
                    image: "/images/cat4.png",
                    route: "#",
                    openings: "2,198",
                },
                {
                    name: "Sales & Marketing",
                    image: "/images/cat4.png",
                    route: "#",
                    openings: "2,198",
                },
                {
                    name: "Education",
                    image: "/images/cat5.png",
                    route: "#",
                    openings: "1,511",
                },
                {
                    name: "Design",
                    image: "/images/cat6.png",
                    route: "#",
                    openings: "2,988",
                },
                {
                    name: "Research",
                    image: "/images/cat7.png",
                    route: "#",
                    openings: "2,988",
                },
                {
                    name: "Human Resources",
                    image: "/images/cat8.png",
                    route: "#",
                    openings: "1,836",
                },
                {
                    name: "Human Resources",
                    image: "/images/cat8.png",
                    route: "#",
                    openings: "1,836",
                },
            ],
        };
    },
};
</script>

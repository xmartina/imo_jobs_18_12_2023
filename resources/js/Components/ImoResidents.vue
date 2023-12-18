<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4 pt-6">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 0px 12px 80px">
                        <div
                            class="text-h3 font-weight-bold"
                            style="font-family: 'Archivo' !important"
                        >
                            {{ heading }}
                        </div>
                        <div
                            class="grey--text"
                            style="font-family: 'Montserrat' !important"
                        >
                            {{ subheading }}
                        </div>
                        <v-row class="mx-0 mb-0 mt-6">
                            <v-col
                                cols="4"
                                v-for="(
                                    programme, programmeIndex
                                ) in programmes"
                                :key="programmeIndex"
                                class="px-0"
                            >
                                <v-card max-width="380" height="600" elevation="15">
                                    <v-img
                                        height="250"
                                        :src="programme.image"
                                    ></v-img>

                                    <v-card-title class="px-3 text-h5 font-weight-medium" style="font-size: 20px !important; font-family: 'Poppins' !important;">
                                        {{ programme.name }}
                                    </v-card-title>
                                    <v-card-text class="px-3">
                                        {{ programme.description }}
                                    </v-card-text>
                                    <v-card-actions class="px-3">
                                        <v-btn :href="
                                        programme.route === '#'
                                            ? '#'
                                            : route(
                                                  programme.route
                                              )
                                    " class="text-none" color="#1A3F78" outlined>
                                            Click to Start
                                        </v-btn>
                                    </v-card-actions>
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
            heading: "More for Imo State Citizens & Residents",
            subheading:
                "These are some of the programmes specially design to support Imo State residents to be gainfully employed .",
            programmes: [
                {
                    name: "SKILLUP IMO PROGRAMME",
                    description:
                        "Do you have a passion in a particular job, lack the skill and knowledge to get your dream job? Register to acquire the skill to start your dream career on scholarship from Imo State Government under the Skillup Imo Programme.",
                    route: "#",
                    image: "/images/programme1.png",
                },
                {
                    name: "IMO WORK AND LEARN PROGRAMME - IWALP",
                    description:
                        "Do you have the basic knowledge and skill, but need further training to advance in your choosing career while earning? Register to advance your knowledge and skill to become a competent professional in your choosing career with IWALP",
                    route: "#",
                    image: "/images/programme2.png",
                },
                {
                    name: "STARTUP IMO",
                    description:
                        "Do you have a viable business idea, but need financial and other supports to start and grow your business. Startup Imo is designed to help startups in Imo State to create, launch and grow their innovative and economically viable business ideas by providing access to training, high quality workspace, infrastructures, funding, business network and mentorship.",
                    route: "#",
                    image: "/images/programme3.png",
                },
            ],
        };
    },
};
</script>

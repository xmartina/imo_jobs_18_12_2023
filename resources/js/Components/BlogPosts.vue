<template>
    <v-sheet>
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 81px 12px 0px;">
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
                                    <v-col cols="5" class="d-flex justify-end">
                                        <v-btn
                                            depressed
                                            text
                                            plain
                                            class="text-decoration-underline px-0 font-weight-bold text-capitalize black--text learn-more-btn"
                                            :href="
                                                viewAllPostsButton.route === '#'
                                                    ? '#'
                                                    : route(
                                                          viewAllPostsButton.route
                                                      )
                                            "
                                        >
                                            {{ viewAllPostsButton.label }}
                                        </v-btn>
                                    </v-col>
                                </v-row>
                            </v-col>
                            <v-col cols="12">
                                <v-row class="mx-0 mb-0">
                                    <v-col
                                        cols="4"
                                        v-for="(
                                            blogPost, blogPostIndex
                                        ) in blogPosts"
                                        :key="blogPostIndex"
                                        class="px-0"
                                    >
                                        <v-card
                                            max-width="380"
                                            height="550"
                                            flat
                                        >
                                            <v-img
                                                height="250"
                                                :src="blogPost.image"
                                            ></v-img>
                                            <v-card-text class="px-0 pb-0">
                                                <v-btn
                                                    depressed
                                                    color="primary lighten-5 primary--text"
                                                    class="text-capitalize"
                                                    href="#"
                                                >
                                                    {{ blogPost.category }}
                                                </v-btn>
                                            </v-card-text>
                                            <v-card-title
                                                class="px-0 text-h5 font-weight-bold"
                                                style="
                                                    font-size: 20px !important;
                                                    font-family: 'Archivo' !important;
                                                "
                                            >
                                                {{ blogPost.title }}
                                            </v-card-title>

                                            <v-card-text class="px-0">
                                                {{ blogPost.description }}
                                            </v-card-text>
                                            <v-card-actions class="px-0">
                                                <v-btn
                                                    depressed
                                                    text
                                                    plain
                                                    class="text-decoration-underline px-0 font-weight-bold text-capitalize black--text learn-more-btn"
                                                    :href="
                                                        blogPost.route ===
                                                        '#'
                                                            ? '#'
                                                            : route(
                                                                  blogPost.route
                                                              )
                                                    "
                                                >
                                                    Read more...
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
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
    name: "BlogPosts",
    data() {
        return {
            heading: "Blog & News",
            subheading:
                "Expert advice and career resources all in the ImoJobs Blog.",
            viewAllPostsButton: {
                label: "View All Articles",
                route: "#",
            },
            blogPosts: [
                {
                    title: "5 Tips for Crafting a Winning Resume",
                    description:
                        "Several tips to consider from our expert hiring manager, Mary lohnson. Best to learn from experience than never!",
                    image: "/images/blog-post1.png",
                    category: "tips",
                    route: "#",
                },
                {
                    title: "The Top 10 In-Demand IT Jobs of 2023",
                    description:
                        "Several tips to consider from our expert hiring manager, Mary lohnson. Best to learn from experience than never!",
                    image: "/images/blog-post2.png",
                    category: "trends",
                    route: "#",
                },
                {
                    title: "How to Ace Your Next Job Interview: Tips from HR",
                    description:
                        "Several tips to consider from our expert hiring manager, Mary lohnson.",
                    image: "/images/blog-post3.png",
                    category: "tips",
                    route: "#",
                },
            ],
        };
    },
    computed: {},
};
</script>

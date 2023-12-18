<template>
    <default-layout>
        <app-head title="Find Jobs"></app-head>
        <banner></banner>
    </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout";
import Banner from "@/Components/Banner.vue";

export default {
    components: {
        DefaultLayout,
        Banner,
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
                route: "#",
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

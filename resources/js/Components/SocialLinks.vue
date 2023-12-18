<template>
    <span>
        <v-btn
            v-for="(socialLink, socialLinkIndex) in socialLinks"
            :key="socialLinkIndex"
            depressed
            icon
            :href="socialLink.link"
        >
            <v-icon :color="color" :size="size">
                {{ socialLink.icon }}
            </v-icon>
        </v-btn>
    </span>
</template>

<script>
export default {
    name: "SocialLinks",
    props: {
        color: {
            type: String,
            default: 'white'
        },
        size: {
            type: String|Number,
            default: 32
        }
    },
    data() {
        return {
            socialLinks: [
                {
                    icon: "mdi-twitter",
                    link: "#",
                },
                {
                    icon: "mdi-facebook",
                    link: "#",
                },
                {
                    icon: "mdi-instagram",
                    link: "#",
                },
                {
                    icon: "mdi-linkedin",
                    link: "#",
                },
            ],
        };
    },
};
</script>

<template>
    <Head :title="title ? `${title} | ${appName}` : `${appName}`">
        <slot />
    </Head>
</template>

<script>
import { Head } from "@inertiajs/vue2";

export default {
    components: {
        Head,
    },
    props: {
        title: String,
    },
    computed: {
        appName() {
            return this.$page.props.appName;
        },
    },
};
</script>

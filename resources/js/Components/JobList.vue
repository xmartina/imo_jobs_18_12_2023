<template>
    <v-row class="mx-0 mb-0">
        <v-col cols="4" v-for="(job, jobIndex) in jobs" :key="jobIndex">
            <v-card max-width="380" height="460" elevation="10" class="pa-6">
                <v-card-title
                    class="px-0 text-h5 font-weight-bold"
                    style="
                        font-size: 20px !important;
                        font-family: 'Archivo' !important;
                    "
                >
                    {{ job.job_title }}
                </v-card-title>
                <v-card-text class="d-flex px-0">
                    <v-avatar size="30" rounded>
                        <v-img :src="job.company.company_url"></v-img>
                    </v-avatar>
                    <div
                        class="text-body-1 font-weight-normal pl-3"
                        style="font-family: 'Montserrat' !important"
                    >
                        {{ job.company.user.first_name }}
                    </div>
                </v-card-text>
                <v-card-text class="px-0 py-0">
                    <v-btn
                        depressed
                        color="primary lighten-5 primary--text"
                        class="text-capitalize"
                        href="#"
                    >
                        {{ job.job_shift.shift }}
                    </v-btn>
                </v-card-text>
                <v-list flat>
                    <v-list-item
                        v-for="(item, i) in job.jobs_skill"
                        :key="i"
                        class="px-0"
                        dense
                    >
                        <v-list-item-icon class="mr-0">
                            <v-icon> mdi-circle-small </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content
                            class="grey--text"
                            v-text="item.name"
                            style="
                                font-family: 'Montserrat' !important;
                                font-size: 14px !important;
                            "
                        >
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
                <v-card-text class="pa-0">
                    <div style="font-family: 'Montserrat' !important">
                        <v-icon>mdi-map-marker</v-icon>
                        {{ job.state_name }}
                    </div>
                    <div style="font-family: 'Montserrat' !important">
                        <v-icon>mdi-currency-ngn</v-icon>
                        {{ pay(job.salary_from, job.salary_to, job.currency.currency_code) }}
                        {{ job.salary_period.period }}
                    </div>
                </v-card-text>
                <v-card-actions class="pt-6 px-0">
                    <v-btn
                        depressed
                        x-large
                        color="primary"
                        class="font-weight-bold text-capitalize white--text px-6 px-lg-8"
                        :href="route('front.job.details', job.job_id)"
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
                        <v-icon> mdi-bookmark-outline </v-icon>
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: "JobList",
    props: {
        jobs: {
            type: Array,
            required: true,
        },
    },
    methods: {

    },
};
</script>

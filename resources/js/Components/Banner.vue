<template>
    <v-sheet class="banner">
        <v-sheet color="transparent" max-width="1440" class="mx-auto px-11">
            <v-container fluid class="px-4">
                <v-row class="ma-0">
                    <v-col cols="12" style="padding: 110px 12px 160px">
                        <v-row>
                            <v-col cols="8">
                                <div
                                    class="text-h3 font-weight-bold white--text"
                                    style="
                                        font-family: 'Archivo' !important;
                                        line-height: 70px;
                                    "
                                >
                                    {{ preHeading }} <br />
                                    {{ heading }}
                                </div>
                            </v-col>
                            <v-col cols="8" class="mb-7">
                                <div
                                    class="text-h5 font-weight-regular white--text"
                                    style="font-family: 'Poppins' !important"
                                >
                                    {{ subheading }}
                                </div>
                            </v-col>
                            <v-col cols="8">
                                <v-card>
                                    <v-row class="mx-0">
                                        <v-col
                                            cols="6"
                                            class="d-flex justify-space-between px-0"
                                        >
                                            <v-autocomplete
                                                v-model="searchSelect"
                                                :loading="loadingSearch"
                                                :items="searchItems"
                                                :search-input.sync="search"
                                                cache-items
                                                flat
                                                solo
                                                hide-details
                                                :label="searchPlaceholder"
                                                prepend-inner-icon="mdi-magnify"
                                            >
                                                <template v-slot:no-data>
                                                    <v-list-item>
                                                        <v-list-item-title>
                                                            Search for your
                                                            desired
                                                            <strong>job</strong>
                                                        </v-list-item-title>
                                                    </v-list-item>
                                                </template>
                                            </v-autocomplete>
                                            <v-divider vertical></v-divider>
                                        </v-col>
                                        <v-col cols="3" class="px-0">
                                            <v-autocomplete
                                                v-model="location"
                                                :loading="loadingLocation"
                                                :items="locations"
                                                :placeholder="
                                                    locationPlaceholder
                                                "
                                                item-value="name"
                                                item-text="name"
                                                hide-details
                                                solo
                                                flat
                                            ></v-autocomplete>
                                        </v-col>
                                        <v-col cols="3" class="px-0">
                                            <v-btn
                                                class="text-capitalize px-10 d-flex mx-auto"
                                                color="primary"
                                                x-large
                                                @click="searchJob"
                                            >
                                                {{ searchButton }}
                                            </v-btn>
                                        </v-col>
                                    </v-row>
                                </v-card>
                            </v-col>
                            <v-col
                                cols="6"
                                class="d-flex justify-space-between secondary--text"
                                style="font-family: 'Montserrat' !important"
                            >
                                <div>
                                    {{ popularSearch }}
                                </div>
                                <div>
                                    {{ popularSearches }}
                                </div>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>
    </v-sheet>
</template>

<script>
import { router } from '@inertiajs/vue2'

export default {
    name: "Bannner",
    data() {
        return {
            preHeading: "Imo Jobs-",
            heading: "From Imo State to The World",
            subheading:
                "We connect the best talents in Imo State with reputable employers in Imo State and around the world",
            searchSelect: null,
            location: null,
            searchItems: [],
            search: null,
            loadingSearch: false,
            loadingLocation: false,
            locations: [],
            searchPlaceholder: "What job are you looking for?",
            locationPlaceholder: "Select location",
            searchButton: "Search",
            popularSearch: "Popular Search:",
            popularSearches: "Graphic Designer, UI/UX, Web Developer",
        };
    },
    mounted(){
        this.setup()
    },
    watch: {
        search(value) {
            value &&
                value !== this.searchSelect &&
                this.querySearchItems(value);
        },
    },
    methods: {
        setup() {
            this.loadLocations()
        },
        loadLocations(){
            this.loadingLocation = true;
            this.$repositories.getStatesSearch.index().then((response) => {
                if (response.success) {
                    this.locations = response.data;
                }
            });
            this.loadingLocation = false;
        },
        searchJob(){
            let search = this.searchSelect === null ? '' : this.searchSelect;
            let location = this.location === null ? '' : this.location;

            location = `${search} ${location}`;

            router.get('search-jobs', {
                location: location
            })
        },
        querySearchItems: _.debounce(function (value) {
            this.loadingSearch = true;
            let params = {
                searchTerm: value,
            };
            // ajax query
            this.$repositories.getJobsSearch.index(params).then((response) => {
                if (response.success) {
                    this.searchItems = response.data;
                }
            });
            this.loadingSearch = false;
        }, 500),
    },
};
</script>
<style>
.v-main .banner {
    background: linear-gradient(103.92deg, #000000 5%, rgba(0, 0, 0, 0.1) 15%),
        url("/images/banner.png"), #d9d9d9 !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;

    /*background-image:
    linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
    url('/images/banner.jpg') !important;*/
}
</style>

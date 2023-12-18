import createRepository from "../api/repository";


export default {
    install: function (Vue, options) {
        const repositoryWithAxios = createRepository(axios);

        const repositories = {
            consultations: repositoryWithAxios("consultations"),
            getJobsSearch: repositoryWithAxios("get-jobs-search"),
            getCitiesSearch: repositoryWithAxios("get-cities-search"),
            getStatesSearch: repositoryWithAxios("get-states-search"),
            //Add more here...
        };

        Vue.prototype.$repositories = repositories;
    },
};

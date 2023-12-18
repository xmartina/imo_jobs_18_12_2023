import makeQueryString from "./query-builder";
export default ($axios) => (resource) => ({
  index(queryParams = null) {
    let url = resource
    if (queryParams !== null) {
      let query = makeQueryString(queryParams);

      url += `?${query}`;
    }
    return $axios.get(`/${url}`).then((response) => {
      return response.data;
    });
  },
  show(id) {
    return $axios.get(`${resource}/${id}`).then((response) => {
      return response.data;
    });
  },
  create(params, fileUpload = false) {
    if (fileUpload) {
      let axios = $axios.create();
      delete axios.defaults.headers.common["content-type"];
      delete axios.defaults.headers.post["content-type"];
      return axios({
        method: "POST",
        url: `${resource}`,
        data: params,
        headers: {
          Accept: "application/vnd.api+json",
          "Content-Type": "application/vnd.api+json",
        },
      }).then((response) => {
        return response.data;
      });
    }
    return $axios.post(`${resource}`, params).then((response) => {
      return response.data;
    });
  },
  update(id, params) {
    return $axios.put(`${resource}/${id}`, params).then((response) => {
      return response.data;
    });
  },
  delete(id) {
    return $axios.delete(`${resource}/${id}`).then((response) => {
      return response.data;
    });
  },
});

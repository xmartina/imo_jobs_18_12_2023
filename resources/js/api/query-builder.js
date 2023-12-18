export default function makeQueryString(params) {
    return new URLSearchParams(params)
        .toString();
}

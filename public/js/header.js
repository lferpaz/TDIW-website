function setTextHeader() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.has('user_name')) {
        document.getElementById['header_user'].innerHTML = urlParams.get('user_name');
    } else {
        document.getElementById['header_user'].innerHTML = 'Cuenta';
    }
}
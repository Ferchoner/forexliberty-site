// VARS

// Code
$(() => {
    document.querySelectorAll('.main-section video').forEach((el, i) => {
        el.addEventListener('click', (e) => {
            el.muted = !el.muted;
        });
    })

    /* make the API call */
    FB.api(
        "/100090421537711/ratings",
        function (response) {
            if (response && !response.error) {
                /* handle the result */
            }
        }
    );
})

// VARS

// Code
$(document).ready(() => {
    document.querySelectorAll('.main-section video').forEach((el, i) => {
        el.addEventListener('click', (e) => {
            el.muted = !el.muted;
        });
    })
})

getRatings = response => {
    console.log(response);
}

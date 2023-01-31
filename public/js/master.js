let scrollTop = 0;
const n = -0.022;
const m = 130.38;

$(() => {
    $(window).scroll(() => {
        scrollTop = $(window).scrollTop();

        if (scrollTop >= 90 && header) {
            $('.desktop-menu').removeClass('fixed-top-visible');
            $('.mobile-menu').addClass('fixed-top-visible');
        }
        else if (header){
            $('.desktop-menu').addClass('fixed-top-visible');
            $('.mobile-menu').removeClass('fixed-top-visible');
            $('.h-container').removeClass('change');
            $('.mobile-menu-content').removeClass('open');
        }

        if( isScrolledIntoView(document.querySelector('#contact-section'), true) ) {
            $('#contact-section').css('background-position', '27% ' + ((scrollTop * n) + m) + '%')
        }
    })

    let nosotrosEl = document.querySelector('.col.list-el');
    if(nosotrosEl) {
        nosotrosEl.addEventListener('click', evt => {
            $('.h-container').toggleClass('change');
            $('.mobile-menu-content').toggleClass('open');
        });
    }

    $('.h-container').on('click', changeMenu);

    $(window).scroll();
    playVideo();
})

let changeMenu = evt => {
    evt.preventDefault();
    $('.h-container').toggleClass('change');
    $('.mobile-menu-content').toggleClass('open');
}

let playVideo = () => {
    let videos = document.querySelectorAll('video');
    videos.forEach(el => el.play());
}

function isScrolledIntoView(el, partial) {
    if (!el)
        return false;

    partial = partial || false;
    let rect = el.getBoundingClientRect();
    let elemTop = rect.top;
    let elemBottom = rect.bottom;

    if (partial) {
        return elemTop < window.innerHeight && elemBottom >= 0;
    }
    // Only completely visible elements return true:
    return (elemTop >= 0) && (elemBottom <= window.innerHeight);
}

// VARS
let headerEl = null;

let openModal = (modal_selector) => {
    let modal = null;
    modal = document.querySelector(modal_selector);
    if (modal) {
        modal.classList.add('open');
        document.querySelector('body').classList.add('modal-open');
    }
}

let closeModal = (modal_selector) => {
    let modal = null;
    modal = document.querySelector(modal_selector);
    if (modal) {
        modal.classList.remove('open');
        document.querySelector('body').classList.remove('modal-open');
    }
}

let toggleModal = (modal_selector) => {
    let modal = null;
    modal = document.querySelector(modal_selector);
    if (modal) {
        modal.classList.toggle('open');
        document.querySelector('body').classList.toggle('modal-open');
    }
}

// devuelve la cookie con el nombre dado,
// o undefined si no la encuentra
let _getCookie = (name) => {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

let _setCookie = (name, value, options = {}) => {

    options = {
        path: '/',
        // agregar otros valores predeterminados si es necesario
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

// Code
$(() => {
    headerEl = document.querySelector('.desktop-fixed-menu');
    if (headerEl)
        $(window).scroll(() => {
            scrollTop = $(window).scrollTop();
            if (scrollTop >= 120) {
                headerEl.classList.add('visible')
            } else {
                headerEl.classList.remove('visible')
            }
        })

    $(window).scroll();
    if (!_getCookie('promo')) {
        setTimeout(() => {
            _setCookie('promo', 1);
            openModal('.promo-modal');
        }, 1500)
    }
})


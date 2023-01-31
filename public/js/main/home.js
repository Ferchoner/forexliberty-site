$(() => {
    document.querySelectorAll('.main-bg video').forEach((el, i) => {
        el.addEventListener('loadeddata', (e) => {
            if(el.readyState >= 3){
                el.play();
            }
        });
    })

    // $('.list-el').on('click', (ev) => )
})

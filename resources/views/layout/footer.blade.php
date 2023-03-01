<div class="call-to-action">
    <a href="https://wa.me/+5214433651732?text=Hola,%20vengo%20del%20sitio%20web,%20deseo%20obtener%20mas%20información" target="_blank">
        <img src="{{ asset('image/whatsapp_FXL.svg') }}" class="img-fluid" alt="Agenda una video llamada">
    </a>
</div>
<div class="promo-modal">
    <div class="closable-area" onclick="closeModal('.promo-modal')"></div>
    <div class="promo-container">
        <div class="row">
            <div class="col-7 img-cont text-center">
                <img src="{{ asset('image/descuento_FXL.svg') }}" alt="¡Promoción!">
            </div>
            <div class="col-5">
                <p class="m-0 p-2 button-cont">
                    @include('layout.schedule-a-call', ['message' => 'Agenda una llamada'])
                </p>
            </div>
        </div>
    </div>
</div>
<div style="margin: -1px; padding: 5px; {{ isset($footer_bg_styles) ? $footer_bg_styles : '' }}">
    <div class="false-footer mx-2 mx-md-5">
        <div class="container-fluid m-0 p-0 position-relative">
            <div class="row align-items-center">
                <div class="linea-gris d-none d-md-block"></div>
                <div class="col-12 col-md-6 text-center">
                    <a href="#home">
                        <img src="{{ asset('image/logotipo_alter_FXL.svg') }}" alt="Forex Liberty" class="alter-logo">
                    </a>
                </div>
                <div class="col-12 col-md-6 px-4 px-md-5 pt-5 pb-1 text-end data">
                    <p class="text-monserrat-semibold">
                        <a class="text-decoration-none mailto" href="mailto:ventasforexliberty@outlook.com" target="_blank">
                            ventasforexliberty@outlook.com
                        </a>
                    </p>
                    <p class="socials text-monserrat-light">
                        <a target="_blank" href="https://www.facebook.com/forexlibertyautotrading"><img src="{{ asset('image/facebook_FXL.svg') }}" alt="Facebook" class="img-social"></a>
                        <a target="_blank" href="https://www.instagram.com/forexliberty"><img src="{{ asset('image/instagram_FXL.svg') }}" alt="Instagram" class="img-social"></a>
                        <a target="_blank" href="https://www.youtube.com/@forexliberty9947"><img src="{{ asset('image/youtube_FXL.svg') }}" alt="Youtube" class="img-social"></a>
                    </p>
                    <p class="text-monserrat-light">
                        Copyright © 2023 — FOREX LIBERTY <br>
                        Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="mx-2 mx-md-5">
    <div class="container-fluid m-0 p-0 position-relative">
        <div class="row align-items-center">
            <div class="linea-gris d-none d-md-block"></div>
            <div class="col-12 col-md-6 text-center">
                <a href="#home">
                    <img src="{{ asset('image/logotipo_alter_FXL.svg') }}" alt="Forex Liberty" class="alter-logo">
                </a>
            </div>
            <div class="col-12 col-md-6 px-4 px-md-5 pt-5 pb-1 text-end data">
                <p class="text-monserrat-semibold">
                    <a class="text-decoration-none mailto" href="mailto:ventasforexliberty@outlook.com" target="_blank">
                        ventasforexliberty@outlook.com
                    </a>
                </p>
                <p class="socials text-monserrat-light">
                    <a target="_blank" href="https://www.facebook.com/forexlibertyautotrading"><img src="{{ asset('image/facebook_FXL.svg') }}" alt="Facebook" class="img-social"></a>
                    <a target="_blank" href="https://www.instagram.com/forexliberty"><img src="{{ asset('image/instagram_FXL.svg') }}" alt="Instagram" class="img-social"></a>
                    <a target="_blank" href="https://www.youtube.com/@forexliberty9947"><img src="{{ asset('image/youtube_FXL.svg') }}" alt="Youtube" class="img-social"></a>
                </p>
                <p class="text-monserrat-light">
                    Copyright © 2023 — FOREX LIBERTY <br>
                    Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>

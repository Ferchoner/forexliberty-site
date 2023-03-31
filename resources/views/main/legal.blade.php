@extends('layout.master')

@section('page_title', 'Preguntas Frecuentes')

@push('styles')
    <link href="{{ asset('css/main/legal.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/legal.js') }}"></script>
@endpush

@section('content')
    <div id="slide-section" class="slide-section mx-lg-5 mx-2 px-2 px-lg-5">
        <div class="row px-2 px-lg-5 p-5 m-0">
            <div class="col-12 text-container">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Términos y condiciones
                </p>
            </div>
            <div class="col-12 text-container">
                <p class="text-data-answer text-montserrat-light">
                    Forex Liberty Auto trading <span class="negritas">no es un broker o fondo de inversión; por lo que no administra, capta o gestiona el dinero de las personas para invertirlo en los mercados bursátiles.</span> Somos una empresa que proporciona un software automático para hacer trading en el mercado de Forex y damos asesoramiento sobre el uso del mismo.<br>
                </p>
            </div>
            <div class="col-12 text-container">
                <p class="text-data-answer text-montserrat-light">
                    Recuerde que las inversiones en los mercados bursátiles son consideradas de alto riesgo, es un mercado en el que afectan muchos factores externos, por lo que las ganancias pasadas no nos aseguran las ganancias futuras. No nos hacemos responsables por cualquier pérdida parcial o total ocasionadas por el bot o el mal manejo del mismo. La comercialización o venta de nuestro(s) software(s)  sin nuestro consentimiento, así como cualquier falta de respeto o burla a nuestro personal o servicio, serán motivos para terminar la relación con el cliente, esto implica que se le dejarán de dar asesoramientos, actualizaciones, seminarios y se le negará el acceso a los canales informativos y redes sociales.
                </p>
            </div>
            <div class="col-12 text-container">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Aviso de Privacidad
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Quiénes somos?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    FOREX LIBERTY, mejor conocido como FOREX LIBERTY AUTOTRADING, portal de internet <a href="https://forexliberty.com.mx">https://forexliberty.com.mx</a>, es el responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente:
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Para qué fines utilizaremos sus datos personales?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    De manera adicional, utilizaremos su información personal para las siguientes finalidades secundarias que no son necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atención:<br>
                    - Proveer información adicional sobre nuestro servicio <br>
                    - Mercadotecnia o publicitaria <br>
                    - Prospección comercial <br>
                    En caso de que no desee que sus datos personales se utilicen para estos fines secundarios, indíquelo a continuación: No consiento que mis datos personales se utilicen para los siguientes fines:<br>
                    - Proveer información adicional sobre nuestro servicio <br>
                    - Mercadotecnia o publicitaria <br>
                    - Prospección comercial <br>
                    La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Dónde puedo consultar el aviso de privacidad integral?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    Para conocer mayor información sobre los términos y condiciones en que serán tratados sus datos personales, como los terceros con quienes compartimos su información personal y la forma en que podrá ejercer sus derechos ARCO, puede consultar el aviso de privacidad integral en: <br>
                    Sitio Web: <a href="https://forexliberty.com.mx">https://forexliberty.com.mx</a>
                </p>
            </div>
        </div>
    </div>
@endsection

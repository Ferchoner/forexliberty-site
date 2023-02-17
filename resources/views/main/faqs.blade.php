@extends('layout.master')

@section('page_title', 'Preguntas Frecuentes')

@push('styles')
    <link href="{{ asset('css/main/faqs.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/faqs.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-5">
        <div class="row p-5 m-0">
            <div class="col-12 m-0 text-center">
                <iframe src="https://www.youtube.com/embed/kRWXyjhymFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div id="slide-section" class="slide-section mx-5 px-5">
        <div class="row p-5 m-0">
            <div class="col-12 text-container">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Respuesta a <br>
                    preguntas frecuentes
                </p>
            </div>
            <div class="col-12 text-container">
                <p class="text-data-question text-montserrat-regular">
                    ¿Necesito tener experiencia en Forex o en Trading?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - No, ya que nuestro bot hace todo por ti, además te incluimos un curso básico de Forex en vivo al comprarlo y asesoría personalizada 24/7.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Necesito tener una computadora para utilizarlo?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - No, en su lugar podemos utilizar una vps, en el primer vídeo lo explicamos más a detalle.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Necesito tener todo el tiempo prendida mi computadora?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - No, podemos utilizar una vps, en el primer vídeo lo explicamos más a detalle.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿En qué plataforma trabaja el bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Metatrader 4.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cuánto es el mínimo y máximo de dinero para trabajar con el Bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Mínimo $30 usd, máximo no hay límite.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Tienen cuenta investor o auditada?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Ya no manejamos cuenta investor ni auditada, ya que se estuvieron robando nuestros resultados y subiéndolos como suyos en sus redes sociales. En su lugar podemos programar una videollamada para que veas el bot y los resultados en vivo de una cuenta real.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cuántas cuentas puedo tener con el bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Las que tu quieras, siempre y cuando estén a tu nombre.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Puedo controlar mi riesgo?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - SI, puedes escoger trabajar el bot con riesgo bajo, medio o alto.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Qué rendimientos me genera el bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - El bot te puede hacer entre un 20 a 100% de rendimiento mensual, dependiendo del riesgo con el que lo trabajes y de los movimientos del mercado.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Dónde deposito y retiro mi dinero?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Todos los que hacemos trading utilizamos brokers, que son bancos virtuales regulados.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Puedo utilizar cualquier broker?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    -Puedes utilizar cualquier broker siempre y cuando te permita usar el auto trading.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cada cuánto puedo depositar o retirar mi dinero?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Cuando tú quieras, ya que nosotros no administramos tu dinero.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cuánto tiempo tarda en retirarse mi dinero?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Esto depende del broker y del medio de retiro, por lo general de 2 a 5 días hábiles.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cómo puedo depositar y retirar mi dinero del broker?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Por medio de monederos electrónicos como skrill, neteller o por medio de tarjeta de crédito o débito.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Cómo se comporta el bot con las noticias (fundamentales) del mercado?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Nuestro bot tiene un filtro de noticias, el cual hace que se desactive antes de una noticia, y se active automáticamente después de la misma, esto para no dar falsas entradas o falsos análisis.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Qué lotajes, pares, apalancamiento, tipo de cuenta, broker etc. se recomiendan utilizar con el bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Todas las recomendaciones, así como tutoriales se te entregan al adquirir el bot.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Se necesitan actualizaciones y tienen costo adicional?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - En ocasiones se hacen ajustes, los cuales son compartidos en un canal de telegram que tenemos exclusivamente con nuestros clientes, no tienen costo adicional.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Ustedes me ayudan a instalar el bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Si, por medio de una videollamada.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Mi inversión es aparte de la compra del bot?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Sí.
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿Qué estrategia usa el bot y por qué son 3 en 1?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Uno entra con tendencia, otro con fibonacci y otro con scalping.
                </p>
                </p>
                <p class="text-data-question text-montserrat-regular">
                    ¿De que país son ustedes?
                </p>
                <p class="text-data-answer text-montserrat-light">
                    - Somos de México
                </p>
            </div>
        </div>
    </div>
@endsection

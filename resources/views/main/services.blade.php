@extends('layout.master')

@section('page_title', 'Servicios')

@push('styles')
    <link href="{{ asset('css/main/services.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/services.js') }}"></script>
@endpush

@section('content')
<div class="slider-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 img-services-container">
                <img src="{{ asset('image/servicios-img_CC-01.png') }}" alt="Servicios" class="services-img mt-lg-0">
            </div>
            <div class="col-12 col-lg content-services text-justify">
                <span class="text-candara-bold section-title">
                    Servicios
                </span>
                <p class="text-gotham-book text-justify text-content mb-5">
                    Para emprender en el mundo actual se necesita contar con un modelo de negocios concreto, establecido y pensado de acuerdo a las necesidades de tu negocio, acompañado de una estrategía que te blinde a largo plazo.
                    <br><br>
                    Buscamos brindar soluciones a nuestros clientes de manera eficaz, ética y moral, innovando en la calidad de nuestros servicios para ser tu opción más integral y profesional.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="services-content-section">
    <div class="container">
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0 pt-5">
            <span class="text-candara-bold section-title">
                Creación y Desarrollo de Negocios
            </span>
            <p class="text-gotham-book text-justify text-content pb-5">
                Apoyamos a los empresarios a crear y desarrollar una estrategia empresarial con un plan de proyecto por objetivos una relación segura entre trabajadores, proveedores, socios, y otros actores para cumplir sus derechos y obligaciones.
                <br>
                <br>
                <span class="text-gotham-medium">Asesoría Financiera para personas morales y físicas con actividades empresariales.</span> <br>
                <span class="text-gotham-medium">Elaboración de Proyecto de Consultoría.</span> <br>
                <span class="text-gotham-medium">Creación de la estrategia empresarial por objetivos.</span> <br>
                <span class="text-gotham-medium">Constitución de Sociedades.</span> <br>
                <span class="text-gotham-medium">Control Organizacional.</span> <br>
                <span class="text-gotham-medium">Auditorias en Fusiones o Adquisiciones.</span> <br>
                <span class="text-gotham-medium">Elaboración y revisión de convenios de participación accionaria.</span> <br>
                <span class="text-gotham-medium">Investigación de empresa y su competencia</span> <br>
                <span class="text-gotham-medium">Dirección de organización.</span> <br>
                <span class="text-gotham-medium">Contacto con proveedores, comercializadores y clientes potenciales.</span> <br>
                <span class="text-gotham-medium">Desarrollo de estudio de mercado.</span> <br>
                <span class="text-gotham-medium">Creación de Identidad Corporativa.</span> <br>
                <span class="text-gotham-medium">Manejo de contenido en redes sociales.</span> <br>
                <span class="text-gotham-medium">Aceleración de Modelo de Negocio.</span> <br>
                <span class="text-gotham-medium">Asesoría en inversiones financieras.</span> <br>
                <span class="text-gotham-medium">Manejo de Marca.</span> <br>
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Asesoría Legal
            </span>
            <p class="text-gotham-book text-justify text-content">
                Participación con el carácter de asesor profesional en el derecho para incorporar de manera integral la estructura jurídica mínima para el correcto desarrollo de una organización o negocio, dependiendo de las necesidades particulares de los mismos.
                <br>
                <br>
                <span class="text-gotham-medium">Asesoría Civil</span> <br>
                <span class="text-gotham-medium">Asesoría Mercantil</span> <br>
                <span class="text-gotham-medium">Asesoría Laboral</span> <br>
                <span class="text-gotham-medium">Asesoría Penal</span> <br>
                <span class="text-gotham-medium">Asesoría Administrativo</span> <br>
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Procesos Judiciales
            </span>
            <p class="text-gotham-book text-justify text-content">
                Dentro de este apartado podemos ubicar todo lo concerniente a la estratificación, desahogo, defensa y promoción de los medios legales para la contienda a la cual nuestro mandante deba hacer frente ya sea por acción de otro o por decisión del primero, esto conlleva las etapas del juicio desde la fijación de la litis hasta la emisión de sentencia de la misma.
                <br>
                <br>
                <span class="text-gotham-medium">Litigio Civil</span> <br>
                <span class="text-gotham-medium">Litigio Mercantil</span> <br>
                <span class="text-gotham-medium">Litigio Laboral</span> <br>
                <span class="text-gotham-medium">Litigio Penal</span> <br>
                <span class="text-gotham-medium">Litigio Administrativo</span> <br>
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Asesoría Contable
            </span>
            <p class="text-gotham-book text-justify text-content">
                Este rubro consiste en todas aquellas consultas de carácter preliminar que el usuario del servicio tiene para con su  carácter en cuanto a contribuyente y que, por la naturaleza de sus ocupaciones, diversas actualizaciones y reformas  en el entorno tributario han generado las condiciones que cada día más personas físicas y no solo morales o con  actividades empresariales deban participar activamente en lo que ve a sus obligaciones para con la hacienda pública. (altas, cambios de régimen tributario, declaraciones, obligaciones, etc.)
                <br>
                <br>
                <span class="text-gotham-medium">Asesoría Fiscal</span> <br>
                <span class="text-gotham-medium">Auditoría</span> <br>
                <span class="text-gotham-medium">Maquila de Nómina</span> <br>
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Estrategias Fiscales
            </span>
            <p class="text-gotham-book text-justify text-content">
                Consistente en el estudio y desarrollo de estructuras particulares a las condiciones presentes que atraviesa una organización (lucrativa o no lucrativa), una persona física (con múltiples actividades empresariales), que den soporte al crecimiento y solicitación de sus actividades frente a terceros.
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Auditorias Externas
            </span>
            <p class="text-gotham-book text-justify text-content">
                Consistente en el estudio y análisis de los estados financieros de una organización según las necesidades de la misma.
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Derecho Corporativo
            </span>
            <p class="text-gotham-book text-justify text-content">
                Herramienta con la que todo empresario y emprendedor debería contar al iniciar su proyecto. Ayuda a blindar una relación segura entre trabajadores, proveedores, socios, y otros actores para cumplir sus derechos y obligaciones.
                <br>
                <br>
                <span class="text-gotham-medium">Contratación y Comercio.</span> <br>
                <span class="text-gotham-medium">Creación de Sociedades.</span> <br>
                <span class="text-gotham-medium">Contratos y Convenios.</span> <br>
                <span class="text-gotham-medium">Empresa Mercantil.</span> <br>
                <span class="text-gotham-medium">Propiedad Intelectual / Industrial.</span> <br>
                <span class="text-gotham-medium">Régimen Fiscal y Contabilidad.</span> <br>
                <span class="text-gotham-medium">Defensa Fiscal Corporativa.</span> <br>
                <span class="text-gotham-medium">Defesa Jurídica.</span> <br>
            </p>
        </div>
    </div>
</div>
@endsection

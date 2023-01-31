@extends('layout.master')

@section('page_title', 'Servicios')

@push('styles')
    <link href="{{ asset('css/main/team.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/team.js') }}"></script>
@endpush

@section('content')
<div class="slider-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 p-0 m-0 img-team-container">
                <img src="{{ asset('image/equipo-img_CC-01.png') }}" alt="Equipo" class="team-img mt-lg-0">
            </div>
            <div class="col-12 col-lg content-services text-justify">
                <span class="text-candara-bold section-title">
                    Equipo
                </span>
                <p class="text-gotham-book text-justify text-content pb-5">
                    Innovamos en pro de nuestros clientes, cubriendo las necesidades que van surgiendo en sus diferentes modelos de negocio, con la seguridad que brinda una firma responsable, que los respalda de manera eficaz, ética y moral en las difentes áreas de su empresa.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="services-content-section pb-5">
    <div class="container">
        <div class="row pb-5 pt-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/dario-img_CC-01.png') }}" alt="Jesús Darío Colin Ortiz" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    Jesús Darío Colin Ortiz
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Maestro en Administración de Empresas.
                    </span>
                    <br><br>
                    Es Licenciado en Derecho, egresado por la Universidad Michoacana de San Nicolás de Hidalgo y cuenta con un MBI (Master Bussiness Administration) por el Instituto Tecnológico de Estudios Superiores de Monterrey.
                    <br>
                    En el escenario profesional se ha desenvuelto en la administración pública en los niveles Federal, Estatal y Municipal, en cuanto a apoderado jurídico en la materia Administrativa y en la iniciativa privada a destacado en su labor en cuanto al carácter de asesor Legal y administrador de personas morales de capital variable.
                    <br>
                    En la consultoría, su expertise esta en el desarrollo de empresas y en la creación de proyectos encaminados al desarrollo de los mismos desde lo administrativo, financiero y contable, así como la administración de los proyectos empresariales.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/judith-img_CC-01.png') }}" alt="Judith Córdoba Acosta" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                 <span class="text-candara-bold section-title px-0 px-lg-2">
                    Judith Córdoba Acosta
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Contador Público. Maestra en Fiscal.
                    </span>
                    <br><br>
                    Judith Adriana Córdoba Acosta, es Contador Público, por la Universidad Michoacana de San Nicolás de Hidalgo y cuenta con un Maestría en Fiscal por el Posgrado de la Facultad de Contaduría y Ciencias Administrativas.
                    <br>
                    En el escenario profesional se ha desenvuelto en la iniciativa privada trabajando para sociedades de responsabilidad limitada y en el ejercicio de la profesión por su cuenta, brindando asesoría a más de 20 organizaciones y personas con actividades empresariales.
                    <br>
                    Desde 2006 ha laborado en colaboración con otras oficinas de corte contable para la gestión de controversias de personas de carácter físico y moral en materias del contribuyente, Fiscal y concernientes a la estratificación y fortificación contable.
                    <br>
                    En la consultoría, su expertise esta en el área contable, asesoría y estratedias fiscales para la empresas en crecimiento.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/cinthya-img_CC-01.png') }}" alt="Cinthya Zaragoza Ortiz" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    Cinthya Zaragoza Ortiz
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Maestra en Creación de Empresas e Innovación y en Dirección y Mercadorecnia.
                    </span>
                    <br><br>
                    Cinthya Zaragoza Ortiz, es Licenciada en Diseño de la Comunicación Gráfica, por la Universidad Latina de América, tiene una Maestría en Dirección y Mercadotecnia, por la UPAEP, y un Máster por la Universidad de Extremadura en Creación de Empresas e Innovación.
                    <br>
                    En el escenario profesional se ha desenvuelto en empresas privadas en áreas de Diseño y Mercadotecnia, en el área de la Academia como catedrático de las materias de Diseño para la carrera de Mercadotecnia. Desde el 2015 ha realizado proyectos independientes para distintas empresas, con asesorías de Identidad Corporativa, Publicidad y Diseño; así como en el desarrollo y creación de empresas en el área de innovación.
                    <br>
                    En la consultoría, su expertise está en el desarrollo de empresas desde el área de Diseño, comunicación y publicidad, además de la gestión del desarrolo de los proyectos a nivel empresarial.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/1_CC.jpg') }}" alt="Otniel González Murillo" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    Otniel González Murillo
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Licenciado en Derecho
                    </span>
                    <br><br>
                    Otniel González Murillo es Licenciado en Derecho, egresado por la Universidad Michoacana de San Nicolás de Hidalgo, y Maestrante en el posgrado de Derecho Corporativo.
                    <br>
                    En el escenario profesional se ha desenvuelto en el área de la Academia como catedrático además de participar desde 2017 en consorcios como Colinortz & Asociados S. C. en procesos de carácter interno para el desarrollo de empresas.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/2_CC.jpg') }}" alt="Adriana Sofía Zavala Borjón" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    Adriana Sofía Zavala Borjón
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Licenciada en Derecho
                    </span>
                    <br><br>
                    Adriana Sofía Zavala Borjón es Licenciada en Derecho, con especialidad en Mecanismos Alternativos de Solución de Controversias, egresada por la Universidad Michoacana de San Nicolás de Hidalgo.
                    <br>
                    Desde el 2019,  se ha desenvuelto dentro de la iniciativa privada en cuanto al carácter de asesora Legal y facilitadora en el campo de acción propios de los litigios, así como para la constitución de empresas, contando con la experiencia en la organización y mantenimiento interno de las mismas.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/3_CC.jpg') }}" alt="Miguel Calderón Trujillo" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    Miguel Calderón Trujillo
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Licenciado en Derecho
                    </span>
                    <br><br>
                    Miguel Calderpon Trujillo es Licenciado en Derecho, egresado por la Universidad Michoacana de San Nicolás de Hidalgo, y tiene una Maestria en Derecho con especialidad en la material laboral.
                    <br>
                    En el escenario profesional fungió como Secretario de la junta de Conciliacion y Arbitraje y ha sido abogado litigante en los últimos 5 años en materia laboral.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col col-12 col-lg-auto text-center">
                <img src="{{ asset('image/4_CC.jpg') }}" alt="José Virgilio Silva Solorio" class="img-fluid img-team-member">
            </div>
            <div class="col col-12 col-lg px-4 px-lg-0">
                <span class="text-candara-bold section-title px-0 px-lg-2">
                    José Virgilio Silva Solorio
                </span>
                <p class="text-gotham-book text-justify text-content px-0 px-lg-2">
                    <span class="text-gotham-medium">
                        Licenciado en Derecho
                    </span>
                    <br><br>
                    José Virgilio Silva Solorio es Licenciado en Derecho, egresado por la Universidad Michoacana de San Nicolás de Hidalgo, tiene especialidad en materia agraria y amparo. En el escenario profesional se ha desempeñado en funciones del tribunal agrario y litigado por más de 10 años en el rubro.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

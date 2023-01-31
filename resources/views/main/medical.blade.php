@extends('layout.master')

@section('page_title', 'Servicios Médicos')

@push('styles')
    <link href="{{ asset('css/main/medical.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/medical.js') }}"></script>
@endpush

@section('content')
<div class="slider-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 p-0 m-0 img-medical-container">
                <img src="{{ asset('image/serv-med-img_CC.jpg') }}" alt="Médico Legal" class="medical-img mt-lg-0">
            </div>
            <div class="col-12 col-lg content-medical text-justify">
                <span class="text-candara-bold section-title">
                    Médico Legal
                </span>
                <p class="text-gotham-book text-justify text-content mb-5">
                    Proporcionamos asesoría legal en el ramo médico, de manera completa, profunda, profesional e ilimitada, integrando Coberturas de responsabilidad civil profesional con póliza de seguro personalizadas a las necesidades del médico y su equipo de trabajo. El equipo legal estará preparado para la prevención por medio de mecanismos alternativos enfocados a la conciliación y negociaciónpara el desempeño de sus actividades médicas previniendo riesgos legales.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="medical-content-section">
    <div class="container">
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0 pt-5">
            <span class="text-candara-bold section-title">
                Áreas
            </span>
            <p class="text-gotham-book text-justify text-content">
                Asesoría en el aspecto jurídico, se presenta la estructura que debe tener el medico con su equipo de trabajo para la correcta elaboración de documentos médico-paciente, aunado a la asesoría en seguros, buscamos las mejores coberturas, que se adapten a las necesidades del médico especialista y su equipo para el desempeño de tus actividades médicas.
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Cobertura de Responsabilidad Civil Profesional de Médicos
            </span>
            <p class="text-gotham-book text-justify text-content">
                Se buscará la aseguradora que cubra las necesidades del profesionista, con las coberturas necesarias para el ejercicio de su profesión y protección al médico y a su equipo de trabajo. En caso de necesitarlo, la Aseguradora pagará, la indemnización proveniente de una Reclamación presentada por primera vez en contra del médico asegurado y derivada de un Acto Médico Negligente en la prestación de sus Servicios Médicos Profesionales.
            </p>
        </div>
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0">
            <span class="text-candara-bold section-title">
                Paquetes
            </span>
            <br>
            <p class="w-100 text-gotham text-justify text-subtitle">
                PAQUETE BÁSICO
            </p>
            <br>
            <p class="text-gotham-book text-justify text-content">
                <span class="text-gotham-medium">Costo del paquete desde $8,000.00*</span> <br>
                <span class="text-gotham-medium">Costo del Paquete Cobertura de póliza $1,000,000.00</span> <br>
                <span class="text-gotham-medium">Asesoría y capacitación legal, con la entrega de póliza del seguro de Responsabilidad Civil Profesional, con las coberturas necesarias con protección del médico y y su equipo del tabajo.</span> <br>
                <span class="text-gotham-medium">Asesoría en diseño y elaboración de formatos de expediente clínico y administrativo, así como todo tipo de cartas de consentimiento informado.</span> <br>
                <span class="text-gotham-medium">Actualización en los cambios en normas y leyes que rigen el ejercicio médico.</span> <br>
                <span class="text-gotham-medium">Diseño de estrategias para la defensa de casos médico legales.</span> <br>
                <span class="text-gotham-medium">Representación médico-legal ante cualquier instancia o autoridad.</span> <br>
                <span class="text-gotham-medium">Asesoría legal a familiares directos ilimitada.</span> <br>
                <span class="text-gotham-medium">Reparación del DAÑO, mediante la póliza de Responsabilidad Civil contratada con la compañía aseguradora para tal efecto.*</span> <br>
                <span class="text-gotham-medium">Protección a Nivel Nacional.</span> <br>
            </p>
            <br>
            <p class="text-gotham text-justify text-subtitle">
                PAQUETE COMPLETO
            </p>
            <br>
            <p class="text-gotham-book text-justify text-content">
                <span class="text-gotham-medium">Costo del paquete desde $10,000.00*</span> <br>
                <span class="text-gotham-medium">Cobertura de póliza $5,000,000</span> <br>
                <span class="text-gotham-medium">Asesoría y capacitación legal, con la entrega de póliza del seguro de Responsabilidad Civil Profesional, con las coberturas necesarias con protección del médico y y su equipo del tabajo.</span> <br>
                <span class="text-gotham-medium">Asesoría en diseño y elaboración de formatos de expediente clínico y administrativo, así como todo tipo de cartas de consentimiento informado.</span> <br>
                <span class="text-gotham-medium">Actualización en los cambios en normas y leyes que rigen el ejercicio médico.</span> <br>
                <span class="text-gotham-medium">Diseño de estrategias para la defensa de casos médico legales.</span> <br>
                <span class="text-gotham-medium">Representación médico-legal ante cualquier instancia o autoridad.</span> <br>
                <span class="text-gotham-medium">Asesoría legal a familiares directos ilimitada.</span> <br>
                <span class="text-gotham-medium">Reparación del DAÑO, mediante la póliza de Responsabilidad Civil contratada con la compañía aseguradora para tal efecto.*</span> <br>
                <span class="text-gotham-medium">Protección a Nivel Nacional e Internacional.</span> <br>
            </p>
            <br>
            <p class="text-gotham text-justify text-subtitle">
                PAQUETE PREMIUM
            </p>
            <br>
            <p class="text-gotham-book text-justify text-content">
                <span class="text-gotham-medium">Costo del paquete desde $15,000.00*</span> <br>
                <span class="text-gotham-medium">Cobertura de póliza $10,000,000.00</span> <br>
                <span class="text-gotham-medium">Asesoría y capacitación legal, con la entrega de póliza del seguro de Responsabilidad Civil Profesional, con las coberturas necesarias con protección del médico y y su equipo del tabajo.</span> <br>
                <span class="text-gotham-medium">Asesoría en diseño y elaboración de formatos de expediente clínico y administrativo, así como todo tipo de cartas de consentimiento informado.</span> <br>
                <span class="text-gotham-medium">Actualización en los cambios en normas y leyes que rigen el ejercicio médico.</span> <br>
                <span class="text-gotham-medium">Diseño de estrategias para la defensa de casos médico legales.</span> <br>
                <span class="text-gotham-medium">Representación médico-legal ante cualquier instancia o autoridad.</span> <br>
                <span class="text-gotham-medium">Asesoría legal a familiares directos ilimitada.</span> <br>
                <span class="text-gotham-medium">Reparación del DAÑO, mediante la póliza de Responsabilidad Civil contratada con la compañía aseguradora para tal efecto.*</span> <br>
                <span class="text-gotham-medium">Protección a Nivel Nacional e Internacional.</span> <br>
                <span class="text-gotham-medium">Protección jurídica en casos extraordinarios.</span> <br>
            </p>
            <p class="text-gotham-book text-justify text-content">
                <span class="text-gotham">*El costo del paquete se establece al cotizar con la aseguradora y varía de acuerdo a la especialidad médica.</span> <br>
                <span class="text-gotham">*Bajo las condiciones de la póliza contratada con la compañía aseguradora.</span> <br>
            </p>
        </div>
    </div>
</div>
@endsection

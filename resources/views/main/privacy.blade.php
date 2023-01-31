@extends('layout.master')

@section('page_title', 'Aviso de Privacidad')

@push('styles')
    <link href="{{ asset('css/main/privacy.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/privacy.js') }}"></script>
@endpush

@section('content')
<div class="medical-content-section">
    <div class="container">
        <div class="row pb-3 pb-lg-5 px-3 px-lg-0 pt-5">
            <span class="text-candara-bold section-title first-el">
                AVISO LEGAL
            </span>
            <p class="text-gotham-book text-justify text-content">
                Informamos que el presente sitio web, incluyendo todos sus contenidos, es propiedad de Colin & Cordoba, S.A. DE C.V. (en adelante Colin & Cordoba), sociedad anónima de capital variable constituida y existente de conformidad con las leyes de los Estados Unidos Mexicanos ("México").
            </p>
            <p class="text-gotham-book text-justify text-content">
                Colin & Cordoba, es un consorcio de abogados que opera a través de sus oficinas principales situadas en México, inscrita en el Registro Publico de la Propiedad Raíz y con dirección de correo electrónico: <a href="mailto: protecciondedatos@colin-cordoba.com.mx">protecciondedatos@colin-cordoba.com.mx</a>
            </p>
            <span class="text-candara-bold section-title">
                Finalidad
            </span>
            <p class="text-gotham-book text-justify text-content">
                Este sitio web (<a href="{{ route('home') }}">www.colin-cordoba.com.mx</a>) ha sido creado por Colin & Cordoba con fines puramente informativos. El acceso y el uso de su contenido, implica que el usuario conoce y acepta sin reserva alguna los siguientes términos de uso que regulan el acceso y utilización al sitio web, por lo cual rogamos los lea atentamente.
            </p>
            <p class="text-gotham-book text-justify text-content">
                En caso de no aceptarlos, el usuario debe abstenerse de acceder y/o usar este sitio web y sus contenidos.
            </p>
            <p class="text-gotham-book text-justify text-content">
                La información contenida se presenta como un servicio público y gratuito de Colin & Cordoba, que no conlleva la inscripción o registro previo.
            </p>
            <p class="text-gotham-book text-justify text-content">
                Aunque la información presentada es exacta en la fecha de la publicación original, la misma puede que no refleje los cambios legislativos y jurisprudenciales más recientes, por lo cual Colin & Cordoba se reserva el derecho a modificar dichos contenidos en cualquier momento, con la intención de mantener este sitio web actualizado.
            </p>
            <p class="text-gotham-book text-justify text-content">
                Para cualquier duda o aclaración pueden enviar un correo electrónico a <a href="mailto: protecciondedatos@colin-cordoba.com.mx">protecciondedatos@colin-cordoba.com.mx</a>
            </p>
            <span class="text-candara-bold section-title">
                Terminos De Uso
            </span>
            <p class="text-gotham-book text-justify text-content pb-5">
                <br>
                <span class="text-gotham-medium list">El contenido de este sitio web no puede usarse como sustituto de una asesoría legal. Las respuestas adecuadas a sus problemas legales dependerán de sus circunstancias particulares y por lo tanto se requerirá asesoramiento legal competente adaptado a su situación.</span> <br>
                <span class="text-gotham-medium list">El uso de la información contenida en este sitio web no debe entenderse como una relación contractual entre el usuario y Colin & Cordoba.</span> <br>
                <span class="text-gotham-medium list">El usuario se obliga a no utilizar el sitio web para la realización de actividades contrarias a las leyes, a la moral y al orden público, obligándose a hacer un uso conforme a las condiciones establecidas en el presente Aviso Legal de forma responsable.</span> <br>
                <span class="text-gotham-medium list">Los enlaces que contiene este sitio web permiten al usuario el acceso a otros sitios y páginas web gestionados por terceros, de los que Colin & Cordoba no se hace responsable en modo alguno. La presencia de estos enlaces tiene una finalidad informativa, no constituyendo en ningún caso una invitación a la contratación de productos o servicios que se ofrezcan en el sitio web de destino.</span> <br>
                <span class="text-gotham-medium list">Queda expresamente prohibida la reproducción, transformación, distribución, comunicación pública, puesta a disposición, extracción, reutilización, reenvío o la utilización de cualquier naturaleza, por cualquier medio o procedimiento, de cualquier derecho de propiedad intelectual o industrial de este sitio web, salvo que medie autorización expresa y por escrito de Colin & Cordoba.</span> <br>
                <span class="text-gotham-medium list">Colin & Cordoba no será responsable de los daños y perjuicios que, directa o indirectamente, deriven del incorrecto uso de la información contenida en este sitio web. Al acceder al sitio web, el usuario acepta en su totalidad la presente liberación de responsabilidad.</span> <br>
                <span class="text-gotham-medium list">Colin & Cordoba adopta todas las medidas de seguridad necesarias para que el acceso y uso de este sitio web sea seguro. No obstante, no puede garantizar la ausencia de virus u otros elementos lesivos que pudieran causar daños o alteraciones en el sistema informático, en los documentos electrónicos o en los ficheros del usuario de la página web. En consecuencia, no responde por los daños y perjuicios que tales elementos pudieran ocasionar al usuario o a terceros.</span> <br>
            </p>
            <span class="text-candara-bold section-title">
                MEDIOS DE COMUNICACIÓN
            </span>
            <p class="text-gotham-book text-justify text-content pb-5">
                Colin & Cordoba ha nombrado a un comité técnico multidisciplinario para la protección de datos personales que bajo su control ha de cumplir y hacer cumplir al interior de la organización la ley federal de protección de datos personales en posesión de particulares así como su reglamento, para ello pone a la disposición de los titulares los siguientes datos de contacto mediante los cuales recibiremos cualquier solicitud para limitar el uso o divulgación de sus datos personales, aclaración o quejas.
                <br>
                <br>
                <span class="text-gotham-medium list">Correo electrónico: <a href="mailto: protecciondedatos@colin-cordoba.com.mx">protecciondedatos@colin-cordoba.com.mx</a></span> <br>
            </p>
            <p class="text-gotham-book text-justify text-content">
                Se establecen y mantienen para su tratamiento las medidas de seguridad administrativas, físicas y técnicas que garantizan la calidad de los datos personales tomando en cuenta los riesgos existentes, las consecuencias para los titulares, la naturaleza del dato y el desarrollo tecnológico. Estas medidas no son menores a las utilizadas para la información de la organización.
            </p>
            <span class="text-candara-bold section-title">
                DATOS PERSONALES
            </span>
            <p class="text-gotham-book text-justify text-content">
                Colin & Cordoba recaba y da tratamiento a los siguientes grupos de datos personales de manera lícita:
                <br>
                <br>
                <span class="text-gotham-medium list">Identificación.</span> <br>
                <span class="text-gotham-medium list">Patrimoniales.</span> <br>
                <span class="text-gotham-medium list">Académicos.</span> <br>
                <span class="text-gotham-medium list">De trayectoria laboral.</span> <br>
                <span class="text-gotham-medium list">Tránsito y movimientos migratorios.</span> <br>
            </p>
            <p class="text-gotham-book text-justify text-content">
                Colin & Cordoba recaba los datos personales arriba descritos por correo electrónico, página web, y redes sociales, medio el cual elige de manera voluntaria el titular para hacernos llegar información. Colin & Cordoba no recaba información personal por ningún otro medio electrónico no mencionado.
            </p>
            <p class="text-gotham-book text-justify text-content">
                Siempre y cuando usted no manifieste objeción alguna en el momento que nos proporciona sus datos personales directamente o al manifestar su oposición posterior en nuestros medios descritos en la sección anterior, con solo enviarnos en escrito libre que exprese su deseo de revocar en cualquier momento su consentimiento.
            </p>
            <p class="text-gotham-book text-justify text-content">
                De acuerdo a los art. 40,41 y 42 del reglamento los anteriores datos personales serán utilizados para las siguientes finalidades para establecer la relación jurídica con la organización.
            </p>
            <span class="text-candara-bold section-title">
                Finalidades necesarias
            </span>
            <p class="text-gotham-book text-justify text-content">
                <br>
                <span class="text-gotham-medium list">Realizar el proceso de selección y contratación de personal.</span> <br>
                <span class="text-gotham-medium list">Contratación, entrega y pago de nuestros servicios.</span> <br>
                <span class="text-gotham-medium list">Cumplimiento de obligaciones legales.</span> <br>
                <span class="text-gotham-medium list">Procesos administrativos, judiciales o cualquier otra índole que involucren al titular de los datos personales.</span> <br>
                <span class="text-gotham-medium list">Aplicar las medidas de seguridad físicas y de higiene establecidas en la organización.</span> <br>
                <span class="text-gotham-medium list">Asignación de herramientas de trabajo.</span> <br>
                <span class="text-gotham-medium list">Las imágenes obtenidas por las cámaras de video que se localizan dentro de nuestras instalaciones son para su seguridad y la de todos nuestros visitantes y colaboradores mediante su supervisión o monitoreo permanente. Las imágenes se mantienen por un máximo de 30 días por motivos de seguridad, después de lo cual son borradas definitivamente.</span> <br>
                <span class="text-gotham-medium list">En nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento como usuario de internet. Los datos personales que recabamos a través de estas tecnologías, los utilizaremos para fines estadísticos, marketing y para facilitar al usuario un acceso más rápido al sitio.</span> <br>
            </p>
            <span class="text-candara-bold section-title">
                Finalidades opcionales
            </span>
            <div class="w-100"></div>
            <p class="text-gotham-book text-justify text-content">
                <br>
                <span class="text-gotham-medium list">Proyección comercial y de mercadotecnia.</span> <br>
                <span class="text-gotham-medium list">Comunicación de promociones.</span> <br>
            </p>
            <div class="w-100"></div>
            <span class="text-candara-bold section-title">
                Transferencia
            </span>
            <p class="text-gotham-book text-justify text-content">
                Los datos personales anteriormente descritos pueden ser transferidos y tratados por los terceros dentro y fuera del territorio nacional. Todas las finalidades mencionadas están en los supuestos del art. 37 de la ley, por lo que no es necesario obtener el consentimiento para su transferencia:
            </p>
            <span class="text-candara-bold section-title">
                DATOS PERSONALES SENSIBLES
            </span>
            <p class="text-gotham-book text-justify text-content">
                Colin & Cordoba recaba y da tratamiento a los siguientes datos personales sensibles de manera lícita:
                <br>
                <br>
                <span class="text-gotham-medium list">Información derivada de resoluciones judiciales o administrativas.</span> <br>
                <span class="text-gotham-medium list">Pertenencia a organizaciones de la sociedad civil.</span> <br>
                <span class="text-gotham-medium list">Hábitos de vida.</span> <br>
                <span class="text-gotham-medium list">Creencia religiosa.</span> <br>
            </p>
            <p class="text-gotham-book text-justify text-content">
                De acuerdo al art. 40,41 y 42 del reglamento los anteriores datos personales serán utilizados para las siguientes finalidades necesarias para establecer la relación jurídica con la organización.
            </p>
            <span class="text-candara-bold section-title">
                Finalidades necesarias
            </span>
            <p class="text-gotham-book text-justify text-content">
                <br>
                <span class="text-gotham-medium list">Cumplimiento de obligaciones legales.</span> <br>
                <span class="text-gotham-medium list">Procesos administrativos, judiciales o cualquier otra índole que involucren al titular de los datos personales.</span> <br>
                <span class="text-gotham-medium list">Aplicar las medidas de seguridad físicas y de higiene establecidas en la organización.</span> <br>
            </p>
            <span class="text-candara-bold section-title">
                MODIFICACIONES AL AVISO DE PRIVACIDAD
            </span>
            <p class="text-gotham-book text-justify text-content">
                Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de novedades legislativas, políticas internas o nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos.
            </p>
            <p class="text-gotham-book text-justify text-content">
                Estas modificaciones estarán disponibles al público a través de los medios descritos en éste documento en el apartado <span class="text-gotham-medium">"DECLARACIÓN DEL RESPONSABLE Y MEDIOS DISPONIBLES DE COMUNICACIÓN"</span> y en nuestra página web: <a href="http://colin-cordoba.com.mx/aviso-de-privacidad">http://colin-cordoba.com.mx/aviso-de-privacidad</a>
            </p>
            <p class="text-gotham-book text-justify text-content">
                <span class="text-gotham-medium">Última actualización 1ero de Mayo de 2022</span>
            </p>
        </div>
    </div>
</div>
@endsection

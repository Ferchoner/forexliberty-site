<?php
/** @var $message String */
/** @var $link String */
?>
<a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" target="_blank" href="{{ (isset($link)) ? $link : 'https://wa.me/+5214433651732?text=Hola,%20vengo%20del%20sitio%20web,%20deseo%20agendar%20una%20videollamada' }}">
    {{ $message }}
</a>

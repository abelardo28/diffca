@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'http://www.diffca.com'])
            DIFFCA
        @endcomponent
    @endslot

    {{-- Body --}}
    <h1>¡Mensaje Enviado Desde el Website!</h1>

Una persona acaba de enviar un mensaje desde el Sitio Web.

Datos enviados:<br>

<b>Nombre:</b> {{ $name }}<br>
<b>Correo Electrónico:</b> {{ $email }}<br>
<b>Teléfono/Celular:</b> {{ $phone }}<br>
<b>Mensaje:</b> {{ $message }}<br>

<p style="font-size: 11px; color:#222;">No responder a este correo ya que es una cuenta utilizada solamente para el envío de notificaciones.</p>
    @slot('footer')
        @component('mail::footer')
            Copyright © {{ date('Y') }} DIFFCA.
        @endcomponent
    @endslot
@endcomponent

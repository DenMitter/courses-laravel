@component('mail::message')
    <strong>Ім'я:</strong> {{ $name }}<br>
    <strong>Номер телефону:</strong> {{ $phone }}<br>

    {!! $helpMessage  !!}
@endcomponent
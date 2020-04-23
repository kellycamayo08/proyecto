@extends('layouts.app')
@section('nav')
    @include('components.nav')
@endsection
@section('content')
<div class="container-fluid h-100 justify-content-center d-flex align-items-md-center">
    <div class="title m-b-md text-example text-center h4">
        Hola <span class="text-capitalize">{{ Auth::user()->name }}</span>, ! es un gusto tenerte ¡
        <p>
            Por el momento estamos desarrollando la herramienta ideal para que puedas gestionar tu horarios de manera profesional y sencilla
            <br><br>
            Apenas tengamos avances te informaremos de cualquier novedad
            <br><br>
            Eres nuestra <strong>prioridad</strong>
        </p>
    </div>

    <div class="footer">
        <strong>Copyrigth</strong>
    </div>
</div>
@endsection

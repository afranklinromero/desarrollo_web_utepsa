@extends('layouts.app')



@section('content')

    <h1>HOLA</h1>
    en la vista Hello, {{ $name }}.
    @if(Auth::check())
        <p>Bienvenido, {{ Auth::user()->name }}!</p>
        @else
        <p>Bienvenido, invitado!</p>
    @endif

    @for($i = 0; $i < 5; $i++)
    <p>Este es el número {{ $i }}</p>
    @endfor

    {{-- <a href="{{prueba2}}"></a> --}}

        @php
            $items = ['Item 1', 'Item 2', 'Item 3'];
        @endphp

            @foreach($items as $item)
            <p>{{ $item }}</p>
            @endforeach

            <form method="POST" action="/submit" class ="form-control">
                @csrf
                <input type="text" name="name" placeholder="Tu nombre" class="form-control">
                <button class ="btn btn-success" type="submit">Enviar</button>
            </form>
            <footer>
                @section('footer')
                    <p>Este es el pie de página.</p>
                @show
            </footer>

            @php
            $safeContent = "<strong>Este es contenido seguro</strong>";
            $unsafeContent = "<script>alert('XSS');</script>";
        @endphp

        <h1>Ejemplo de contenido seguro</h1>
        <p>{{ $safeContent }}</p> <!-- Escapará el HTML, seguro -->

    
@endsection    



   
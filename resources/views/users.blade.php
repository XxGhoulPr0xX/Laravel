@extends('layout')
@section('title', "Usuario")
@section('content')
<!---<div class="row mt-3"><--Margin top: 3-->
    <!--<div class="col-8"><--Ancho de columna: 8-->
        <br><br>
        <h1>{{$title}}</h1>
        <hr>
        @if(!empty($variable))
            <ul>
                @foreach($variable as $arrayuser)<!--si esto es falso, hace lo siguiente-->        
                <li>{{ $arrayuser }}</li>
                @endforeach
            </ul>
        @else
            <p> No hay usuarios registrados</p>
        @endif
    <!--</div>
    <div class="col-4">
        <br><br>
        @include('sidebar') <--Manda a llamar el archivo--
    </div>
</div>-->
@endsection
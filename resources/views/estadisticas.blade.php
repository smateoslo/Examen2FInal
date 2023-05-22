@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


<h1>Estadisticas</h1>

<table>
@foreach($valoraciones as $valoracion)
<tr>
    <td>{{$valoracion->valoracioncentro}}</td>
</tr>
@endforeach
</table>


@endsection
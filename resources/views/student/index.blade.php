@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Alumnos de un ciclo</h2>

  <select name="ciclos" id="ciclo">
    @foreach($lavels as $lavel)
    <option value="{{$lavel->id}}">{{$lavel->name}}</option>
    @endforeach
  </select>
  <table>
    <tr>
      <th>nombre</th>
    </tr>
    @foreach($lavels as $lavel)
    @foreach($users as $user)
    @if($user->lavel_id == $lavel->id)
    <tr>
      <td>{{$user->name}}</td>
    </tr>
    @endif
    @endforeach
    @endforeach

  </table>

@endsection

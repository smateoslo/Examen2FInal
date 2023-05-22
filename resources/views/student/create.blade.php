@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h4>Nuevo/a alumno/a</h4>
  <form action="{{url('/crear/nuevoAlumno')}}" method="post">
    @csrf
    <label for="phone" id='phone'>phone
      <input type="number" name='phone'>
      @error('phone')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <label for="password">password
      <input type="password" name='password'>
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <label for="gender">gender
      <select name="gender" id="gender">
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
    </label>
    <br>
    <label for="email">email
      <input type="email" name='email'>
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <label for="name">name
      <input type="text" name='name'>
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <label for="adress">adress
      <input type="text" name='adress'>
      @error('adress')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <label for="birth_date">birth_date
      <input type="date" name='birth_date'>
      @error('birth_date')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </label>
    <br>
    <button type='submit'>Crear</button>
  </form>
  <br>

@endsection

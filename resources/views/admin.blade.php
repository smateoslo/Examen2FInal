@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<table>
    <tr>
        <th>name</th>
    </tr>
    @foreach($corporations as $corporation)
    <tr>
        <td>$corporation->name</td>
    </tr>
    @endforeach
</table>
@endsection
@extends('layout')

@section('content')
    <h1>My First Website</h1>

    <ul>
    @foreach($players as $player)
    <li>{{ $player }}</li>
    @endforeach
    </ul>
@endsection

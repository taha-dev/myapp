@extends('layouts.app')

@section('content')
<div class="container">
    <img src="../{{ $user['img'] }}" class="pro-img">
    <p>Name: {{ $user['name'] }}</p>
    <p>Dob: {{ $user['dob'] }}</p>
    <button><a href="/add/{{ $user['id'] }}">Add Friend</a></button>
</div>
@endsection
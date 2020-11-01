@extends('layouts.app')

@section('content')
<div class="container">
    <img src="{{ $user['img'] }}" class="pro-img">
    <p>Name: {{ $user['name'] }}</p>
    <p>Dob: {{ $user['dob'] }}</p>
    <p>Contact: {{ $user['contact'] }}</p>
</div>
@endsection

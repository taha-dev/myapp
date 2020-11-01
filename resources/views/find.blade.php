@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($list as $user)
	<ul class="list-group">
  <li class="list-group-item"><img src="images/profile/{{ $user['img'] }}" class="pro-img-list"> <a href="/showuser/{{ $user['id']}}">{{ $user['name'] }}</a></li>
</ul>
    @endforeach
</div>
@endsection
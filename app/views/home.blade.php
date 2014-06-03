@extends('layout.main') 		{{--extents layout/main.blade.php--}}

@section('content')				{{--start @section content--}}
	
	@if(Auth::check())
		<p>Hello, {{ Auth::user()->username }}.</p>
	@else
		<p>You are not sign in.</p>
	@endif
	
		
@stop 							{{--end @section content--}}
	

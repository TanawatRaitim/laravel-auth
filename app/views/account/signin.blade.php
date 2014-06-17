@extends('layout.main')

@section('content')
	<form action="" method="post">
		
		<div class="field">
			Email: <input type="text" name="email" autocomplete="off" {{ (Input::old('email')) ? 'value = "'.e(Input::old('email')).'"' : '' }} autofocus />
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
		<div class="field">
			Password: <input type="password" name="password" />
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		<div class="field">
			<input type="checkbox" name="remember" id="remember" />
			<label for="remember">
				Remember me
			</label>
		</div>
		<input type="submit" value="Sign in" />
		{{ Form::token() }}
	</form>
@stop

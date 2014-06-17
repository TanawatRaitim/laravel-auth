@extends('layout.main')

@section('content')
	<form action="{{ URL::route('account-change-password-post') }}" method="post">
		<div class="field">
			Old Password: <input type="password" name="old_password" id="" autocomplete="off" />
			@if($errors->has('old_password'))
				{{ $errors->first('old_password') }}
			@endif
		</div>
		<div class="field">
			New Password: <input type="password" name="password" id="" />
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		<div class="field">
			New Password again: <input type="password" name="password_again" id="" />
			@if($errors->has('password_again'))
				{{ $errors->first('password_again') }}
			@endif
		</div>
		<input type="submit" value="Change password" />
		{{ Form::token() }}
	</form>
@stop



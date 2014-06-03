<!DOCTYPE html>
<html>
	<head>
		<title>Authentication system</title>
	</head>
	<body>
		
		@if(Session::has('global'))
			<p>{{ Session::get('global') }}</p>
		@endif
		
		@include('layout.navigation')	{{-- include layout/navigation.blade.php --}}
		@yield('content')
	</body>
</html>
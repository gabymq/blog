<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>

	@include('admin.template.partials.nav')

		<section>
			@yield('content')
		</section>
	
<script src="{{asset('plugins/jquery/js/jquery-1.12.3.js') }}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>
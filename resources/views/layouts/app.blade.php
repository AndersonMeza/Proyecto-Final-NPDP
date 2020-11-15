<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>¡Friends!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
	 <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kaii.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light shadow-sm navfondo">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/home') }}">
				<i class="las la-graduation-cap"style="font-size: 23px;"></i>Friends
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
								@endif
						@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<i class="las la-power-off"></i>{{ Auth::user()->name }}
									</a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
										</form>
									</div>
								</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

			@auth
			<div class="wrapper d-flex align-items-stretch ">
				<div class="sidebar">
					<div class="img bg-wrap text-center py-4 " style="background-image: url({{ asset('uploads/images/bg_1.jpg') }});">
						<div class="user-logo">
							<div class="img" style="background-image: url({{ asset('uploads/users/'.Auth::user()->fotografia)}});"></div>
							<h3>{{ Auth::user()->name }}</h3>	
						</div>
					</div>
					<ul class="list-unstyled components mb-5 " >
						<li class=" "><a>{{ Auth::user()->email }}</a></li>
						<li class=" "><a>{{ Auth::user()->curso }}</a></li>
						<li class=""><a>Nivel {{ Auth::user()->nivel }}</a></li>
						<li class=""><a>{{ Auth::user()->nacimiento }}</a></li>
						<li>
							<a class="btn btn-primary my-button"style="font-size: 14px" href="/usuarios/edit/{{ Auth::user()->id }}">
								<i class="las la-pen-alt"></i> Editar Perfil
							</a>
						</li>
					</ul>
				</div>

				<main class="py-4 main">
					@yield('content')
				</main>

				<div class="sidebar ">
					@if (session('foto-grupo'))
						<div class="img bg-wrap text-center py-4" style="background-image: url({{ asset('uploads/grupos/'.session('foto-grupo'))}});">
							<div class="user-logo">
								<h3>GRUPOS</h3>	
							</div>
						</div>
					@else
						<div class="img bg-wrap text-center py-4">
							<div class="user-logo">
								<h3>GRUPOS</h3>	
							</div>
						</div>
					@endif
					
					<ul class="list-unstyled components mb-5">
						<li class="active">
							<a href="/grupos"><span class="fa fa-home mr-3 las la-search"></span>Buscar</a>
						</li>
						@foreach(Auth::user()->grupos as $grupo)
						<li class="active">
							<a href="/grupos/show/{{ $grupo->GRUPOID }}"><span class="fa fa-home mr-3"></span>{{ $grupo->GRUPONOMBRE }}</a>
						</li>
						@endforeach
						<li class="active">
							<a href="/grupos/create"><span class="fa fa-home mr-3 las la-plus"></span>Grupo</a>
						</li>
					</ul>
				</div>

			</div>
			@else
			<main>
				@yield('content')
			</main>
			@endauth

	</div>
</body>
</html>

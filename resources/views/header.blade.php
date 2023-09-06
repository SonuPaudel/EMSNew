<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ems</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
	<!-- Navbar goes here -->
	<nav class="bg-white shadow-lg">
		<div class="max-w-6xl mx-auto px-4">
			<div class="flex justify-between">
				<div class="flex space-x-7">
					<div>
						<!-- Website Logo -->
						<a href="#" class="flex items-center py-4 px-2">
							<img src="{{asset('/images/logo.png')}}" alt="Logo" class="h-8 w-8 mr-2">
							<span class="font-semibold text-gray-500 text-lg">EMS</span>
						</a>
					</div>
					<!-- Primary Navbar items -->
					<div class="hidden md:flex items-center space-x-1">
						<a href="{{route('index')}}" @if(request()->routeIs('index')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Home</a>

						<a href="{{route('events')}}" @if(request()->routeIs('events')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Events</a>
						<a href="{{route('services')}}" @if(request()->routeIs('services')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
						<a href="{{route('venue')}}" @if(request()->routeIs('venue')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Venue</a>
						<a href="{{route('gallery')}}" @if(request()->routeIs('gallery')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Gallery</a>
						<a href="{{route('about')}}" @if(request()->routeIs('about')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About Us</a>
						<a href="{{route('contact')}}" @if(request()->routeIs('contact')) class="text-green-500 border-b-4 border-green-500 font-semibold py-4 px-2" @endif class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
					</div>
				</div>
				<!-- Secondary Navbar items -->
				@if(Auth::check())
				<div class="hidden md:flex items-center space-x-3">
					<a href="{{ Auth::user()->user_type === 'admin' ? route('dashboard') : route('userdashboard') }}" target="_blank" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Dashboard</a>

					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<button type="submit" class="py-2 px-2 mt-4 font-medium text-white bg-red-500 rounded hover:bg-green-400 transition duration-300">Logout</button>
					</form>
				</div>
				@else


				<div class="hidden md:flex items-center space-x-3 ">
					<a href="{{route('login')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
					<a href="{{route('register')}}" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
				</div>
				@endif
				<!-- Mobile menu button -->
				<div class="md:hidden flex items-center">
					<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
		<!-- mobile menu -->
		<div class="hidden mobile-menu">
			<ul class="">
				<li @if(request()->routeIs('index')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('index')}}" class="block text-sm px-2 py-4">Home</a></li>
				<li @if(request()->routeIs('services')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('services')}}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
				<li @if(request()->routeIs('venue')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('venue')}}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Venue</a></li>
				<li @if(request()->routeIs('gallery')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('gallery')}}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Gallery</a></li>
				<li @if(request()->routeIs('about')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('about')}}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About Us</a></li>
				<li @if(request()->routeIs('contact')) class="active font-semibold bg-green-500 text-white" @endif><a href="{{route('contact')}}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
				@if(Auth::check())
				<li><a href="{{ auth()->user()->user_type == 'admin' ? route('dashboard') : route('userdashboard') }}" class="block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Dashboard</a></li>

				<li>
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<button type="submit" class="block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Logout</button>
					</form>
				</li>
				@else
				<li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Log In</a></li>
				<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Sign Up</a></li>
				@endif


			</ul>
		</div>
		<script>
			const btn = document.querySelector("button.mobile-menu-button");
			const menu = document.querySelector(".mobile-menu");

			btn.addEventListener("click", () => {
				menu.classList.toggle("hidden");
			});
		</script>
	</nav>
	@yield('content')
	@include('footer')
</body>

</html>
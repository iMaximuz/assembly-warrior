@extends('layouts.master')

@section('title')
	Profile
@endsection

@section('header-title')
	Profile-Username
@endsection


@section('content')
<div class="wrapper style1">
		<div class="container">
			<div class="row ">
				<div class="4u 12u(mobile) important(mobile)" id="sidebar">
					<hr class="first" />
					<section>
						<a href="#" class="image profile"><img src="{{asset('helios/images/pic07.jpg') }}" alt="" /></a>
						<header>
								<h3>Usuario</h3>
							</header>
						<ul>
							<li><a href="#"><strong> Jugadas </strong></a></li>
							<li><a href="#">Momentos</a></li>
						</ul>
					</section>
				</div>
				<div class="8u 12u(mobile)" id="content">
					<div class="row">
						<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{URL::to('helios/images/pic07.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{URL::to('helios/images/pic08.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{URL::to('helios/images/pic09.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection
@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/assembly.css')}}">
@endsection

@section('title')
	Video Title
@endsection

@section('header-title')
	Video Title
@endsection

@section('content')
<div class="wrapper style1">

	<div class="container">
		<article id="main" class="special post">
			<header class="post-title">
				<h2>Video Title</h2>
			</header>
			<a href="#" class="image featured"><img src="{{asset('helios/images/pic06.jpg')}}" alt="" /></a>
			@auth				
			<div class="post-buttons">
				<a href="#" onclick="return false" class="icon"><i class="material-icons">cloud</i></a>
				<a href="#" onclick="return false" class="icon on"><i class="material-icons">favorite</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">attachment</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">computer</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">traffic</i></a>
			</div>
			@endauth
			<p>
				Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
				posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
				lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
				consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
				interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
				natoque aenean scelerisque vel lacinia mollis quam sodales congue.
			</p>
			<section>
				<header>
					<h3>Comentarios</h3>
				</header>
				@auth
				<div id="addComment">

					<div class="webflow-style-input" style="width: 70%">
						<input type="textarea" class="" type="email" placeholder="Deja un comentario"></input>
						<button type="submit"><i class="material-icons">arrow_forward</i></button>
					</div>
					
				</div>
				@endauth
			</section>
			<section>
				<comment>
					<div class="row">
						<div class="2u user-card">
							<header>
								<div class="profile-picture">
									<a href="{{route('profile')}}" class="image profile" style="width:50px; height:50px;"><img src="{{asset('helios/images/pic07.jpg') }}" alt="" /></a>
								</div>
								<strong><a href="{{route('profile')}}">Usuario</a></strong>
							</header>
						</div>
						<div class="10u comment-content">
							<div class="row">
								<span>
									Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
									at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
									feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
									fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
									egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
								</span>
							</div>
							@auth								
							<div class="post-buttons">
								<a href="#" onclick="return false" class="icon on"><i class="material-icons">thumb_up</i></a>
								<a href="#" onclick="return false" class="icon"><i class="material-icons">thumb_down</i></a>
							</div>
							@endauth
						</div>
					</div>
				</comment>
				<comment>
					<div class="row">
							<div class="2u user-card">
								<header>
									<div class="profile-picture">
										<a href="#" class="image profile" style="width:50px; height:50px;"><img src="{{asset('helios/images/pic07.jpg') }}" alt="" /></a>
									</div>
									<strong>Usuario</strong>
								</header>
							</div>
							<div class="10u comment-content">
								<div class="row">
									<span>
										Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
										at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
										feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
										fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
										egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
									</span>
								</div>
								@auth								
								<div class="post-buttons">
									<a href="#" onclick="return false" class="icon on"><i class="material-icons">thumb_up</i></a>
									<a href="#" onclick="return false" class="icon"><i class="material-icons">thumb_down</i></a>
								</div>
								@endauth
							</div>
						</div>
					</comment>
				</section>
		</article>
	</div>

</div>


	
@endsection
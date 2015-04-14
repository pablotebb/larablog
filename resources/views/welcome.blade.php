@extends('template.main')
@section('title'){{'Larablog'}}@endsection
@section('content')
	@include('template.partials.main-nav')
	@if(isset($_GET['page']))
		<div class="row-fluid">
			<div class="jumbotron">
				<h1 class="text-center">Larablog <br>
				<small>Articulos sobre Laravel 5</small></h1>
			</div>
		</div>
	@else
		<header>
			<div class="blur">
				<div class="croisant" id="title">
					Larablog
				</div>
				<div id="subtitle" class="croisant">
					Articulos web sobre Laravel 5
				</div>
				<div align="center">
					<a onclick="$('#posts').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});" class="btn btn-web btn-lg">Leer blog</a>
				</div>
			</div>
		</header>
	@endif
	
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					@foreach($posts as $p)
						<h3 class="text-center">{{$p->title}}</h3>
						<div align="center">
							<img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive img-thumbnail">
						</div>
						<br>
						<div align="center">
							<h5 class="text-info">Temas relacionados al articulo:</h5>
							<?php 
								$tags = explode(',', $p->tags);
							 ?>
							 @foreach($tags as $t)
								<a href="tag/{{$t}}"><label class="label label-primary" class="tl">#{{$t}}</label></a>
							 @endforeach				
						</div>
						<br>
						<div align="center">
							<a href='articulos/{{$p->slug}}'class="btn btn-info">Leer el articulo completo.</a>
						</div> 					
						<hr>
					@endforeach
				</div>
				<div class="col-md-2"></div>				
			</div>
			<div class="container" align="center">
				<?php echo $posts->render() ?>
			</div>
		</div>
	</section>
	@include('template.partials.footer')
@stop
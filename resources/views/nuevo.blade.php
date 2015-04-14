@extends('template.main')
@section('title'){{ 'Nueva publicación| ' . \Auth::user()->username }}@endsection
@section('content')
	@include('template.partials.logbar')
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">
					Crea una nueva publicación
				</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				{!! Form::open(['url' => 'admin/posts/new', 'autocomplete' => 'off']) !!}
					<fieldset>
						<input type="text" name="title" placeholder="Titulo del post" class="form-control">
						<br>
						<textarea name="content" id="editor" cols="30" rows="15" class="form-control" placeholder="Contenido del post">
						</textarea>
						<br>
						<input type="text" name="tags" class="form-control" placeholder="Etiquetas (Separadas por una coma)">
						<br>
						<input type="text" name="photo" placeholder="Imagen del post" class="form-control">
						<br>
						<input type="submit" value="Crear" class="btn btn-block btn-success">
					</fieldset>
				{!! Form::close() !!}
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br><br>
	@include('template.partials.footer')
@endsection
@section('js')
	<script>
		$('#editor').trumbowyg();
	</script>
@stop
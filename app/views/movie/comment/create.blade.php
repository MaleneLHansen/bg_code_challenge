@extends('layout.main')

@section('title', 'Opret ny komment til ' . $movie->title)


@section('content')
	<form action="{{route('comment.store', $movie->id)}}" method="post">
		
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name" class="control-label">Titel</label>
		    	<input class="form-control" type="text" name="title" required>
		    </div>
		</div>
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name" class="control-label">Navn</label>
		    	<input class="form-control" type="text" name="name" required>
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description" class="control-label">Kommentar</label>
		    	<textarea class="form-control" name="body" col="5" rows="5"></textarea>
		    </div>
		</div>
		<input type="hidden" name="movie_id" value="{{$movie->id}}">

		<div class="col-md-12">
			<button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i>Opret</button>
		</div>

	</form>
@endsection('content')
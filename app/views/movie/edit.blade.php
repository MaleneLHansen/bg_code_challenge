@extends('layout.main')

@section('title', 'Rediger' . ' ' . $movie->title)


@section('content')
	<form action="{{route('movie.update', $movie->id)}}" method="post">
		<input type="hidden" name="_method" value="put" />
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name">Navn</label>
		    	<input class="form-control" type="text" name="title" required value="{{$movie->title}}">
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description">Beskrivelse</label>
		    	<textarea class="form-control" name="description" col="5" rows="5">{{$movie->description}}</textarea>
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description">Kategori</label>
		    	<select name="category_id" class="form-control">
		    		@foreach($categories as $category)
		    			<option {{$movie->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>

		<div class="form-group">
		    <div class="col-sm-8">
			<label for="description">Bedømmelse - vælg antal <i class="fa fa-fw fa-star"></i></label>
		    	<select name="rating" class="form-control">
		    		@foreach($ratings as $rating)
		    			<option {{$movie->rating == $rating ? 'selected' : ''}} value="{{$rating}}">{{$rating}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>
		<div class="col-md-12">
			<button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i>Opdater</button>
		</div>


	</form>
@endsection('content')
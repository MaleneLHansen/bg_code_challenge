@extends('layout.main')

@section('title', 'Opret ny film')


@section('content')
	<form action="{{route('movie.store')}}" method="post">
		
		<div class="form-group">
			<label for="name">Navn</label>
		    
		    <div class="col-sm-8">
		    	<input class="form-control" type="text" name="title" required>
		    </div>
		</div>

		<div class="form-group">
			<label for="description">Beskrivelse</label>
		    
		    <div class="col-sm-8">
		    	<textarea class="form-control" name="description" col="5" rows="5"></textarea>
		    </div>
		</div>

		<div class="form-group">
			<label for="description">Kategori</label>
		    
		    <div class="col-sm-8">
		    	<select name="category_id" class="form-control">
		    		@foreach($categories as $category)
		    			<option value="{{$category->id}}">{{$category->title}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>

		<div class="form-group">
			<label for="description">Bedømmelse - vælg antal <i class="fa fa-fw fa-star"></i></label>
		    <div class="col-sm-8">
		    	<select name="category" class="form-control">
		    		@foreach($ratings as $rating)
		    			<option value="{{$rating}}">{{$rating}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>

		<button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i>Opret</button>



	</form>
@endsection('content')
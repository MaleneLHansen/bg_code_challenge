@extends('layout.main')

@section('title', 'Opret ny film')


@section('content')
	<form action="{{route('movie.store')}}" method="post">
		
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name" class="control-label">Navn</label>
		    	<input class="form-control" type="text" name="title" required>
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description" class="control-label">Beskrivelse</label>
		    	<textarea class="form-control" name="description" col="5" rows="5"></textarea>
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description" class="control-label">Kategori</label>
		    	<select name="category_id" class="form-control">
		    		@foreach($categories as $category)
		    			<option value="{{$category->id}}">{{$category->title}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>

		<div class="form-group">
		    <div class="col-sm-8">
			<label for="description" class="control-label">Bedømmelse - vælg antal <i class="fa fa-fw fa-star"></i></label>
		    	<select name="category" class="form-control">
		    		@foreach($ratings as $rating)
		    			<option value="{{$rating}}">{{$rating}}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>
		<div class="col-md-12">
			<button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i>Opret</button>
		</div>


	</form>
@endsection('content')
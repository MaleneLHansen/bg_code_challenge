@extends('layout.main')

@section('title', $movie->title)

@section('content')

	<div class="col-md-12">
		<div class="col-md-4">
			<label>Beskrivelse</label>
		</div>
		<div class="col-md-8">
			<p>{{$movie->description}}</p>
		</div>

		<div class="col-md-4">
			<label>Kategori</label>
		</div>
		<div class="col-md-8">
			<p>{{$movie->category->title}}</p>
		</div>
		<div class="col-md-4">
			<label>Bedømmelse</label>
		</div>
		<div class="col-md-8">
			<p>{{$movie->rating}} <i class="fa fa-fw fa-star"></i></p>
		</div>
	</div>

	<div class="col-md->12">
		<hr>
	</div>

	<div class="col-md-12">
		<h4>Kommentarer</h4>



		@foreach($movie->comments as $comment)
			<div class="well col-md-4">
				<p><b>{{$comment->title}}</b></p>
				<p>{{$comment->name}}</p>
			    <p>{{$comment->body}}</p>
			</div>
			
		@endforeach
	</div>


@endsection('content')

@section('script')
<script>
	$(document).ready(function(){
		
	});
</script>
@endsection('script')
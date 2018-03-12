@extends('layout.main')

@section('title', $movie->title)

@section('content')

	@if($message !== null)
	<div class="col-md-12">
		<div class="alert alert-info">
			{{$message}}
		</div>
	</div>
	@endif
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
		<a href="{{route('comment.add', $movie->id)}}" title="Tilføj kommentar" class="btn btn-success btn-sm"><i class="fa fa-fw fa-plus"></i></a>

		<div class="col-md-12" >
			@foreach($movie->comments as $comment)
				<div class="well col-md-4" id="{{'com_' . $comment->id}}">
					<p><b>{{$comment->title}}</b></p>
					<p>{{$comment->name}}</p>
				    <p>{{$comment->body}}</p>
				    <hr>
				    <a href="{{route('comment.edit', $comment->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-pencil"></i></a>
				    <button data-id="{{$comment->id}}" title="Slet" class="btn btn-danger btn-sm delete"><i class="fa fa-fw fa-times"></i></button>
				</div>
				
			@endforeach
		</div>
	</div>


@endsection('content')
@include('modals.delete_comment')
@section('script')
<script>
	$(document).ready(function(){
		$(document).on('click', '.delete', function(){
			$('.modal').data('id', $(this).data('id'));
			$('.modal').modal('show');
		});

		$(document).on('click', 'button.deleteFinish', function(){
			var id = $('.modal').data('id');
			$.ajax({
				url: "/comment/delete/"+id,
				type: 'DELETE',
				success : function (result){
					if (result.result = 'success'){
						$("#com_"+result.id).remove();
						$(".modal").modal('hide');
					}
				}
			});
		});
	});
</script>
@endsection('script')
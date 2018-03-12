@extends('layout.main')

@section('title', 'Film')

@section('content')
	@if($message !== null)
	<div class="col-md-12">
		<div class="alert alert-info">
			{{$message}}
		</div>
	</div>
	@endif
	<div class="col-md-12">
		<a href="{{route('movie.create')}}" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tilføj film</a>
	</div>
	<div class="col-md-12">
		<input id="searchbar" type="text" class="form-control" placeholder="Søg...">
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>Titel</th>
				<th>Beskrivelse</th>
				<th>Category</th>
				<th>Bedømmelse</th>
				<th>Handlinger</th>

			</thead>
			<tbody>
				@foreach($movies as $movie)
					<tr id="{{'mov_'.$movie->id}}">
						<td>{{$movie->title}}</td>
						<td>{{$movie->shortDescription()}}</td>

						<td>{{$movie->category->title}} </td>
						<td>{{$movie->rating}} <i class="fa fa-fw fa-star"></i></td>
						<td>
							<a title="Se mere" href="{{route('movie.info', $movie->id)}}" class="btn btn-info btn-sm"><i class="fa fa-fw fa-info"></i></a>
							<a title="Rediger" href="{{route('movie.edit', $movie->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-pencil"></i></a>
							<button data-id="{{$movie->id}}" title="Slet" class="btn btn-danger btn-sm delete"><i class="fa fa-fw fa-times"></i></button>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>
@endsection('content')
@include('modals.delete')
@section('script')
<script>
	$(document).ready(function(){
		$("#searchbar").keyup(function(){
		    if($("#searchbar").val() == ''){
					$("table tbody").find('tr').show();
			}else {
			   $("table tbody").find('tr').hide();
			   $("table tbody").find('tr').children().each(function(){
			     // console.log($("#searchbar").val().toLowerCase());
			     console.log($(this).text().toLowerCase());
			     if($(this).text().toLowerCase().indexOf($("#searchbar").val().toLowerCase()) >= 0){
			       $(this).parent().show();
			     }
			   });
			}
		});

		$(document).on('click', '.delete', function(){
			$('.modal').data('id', $(this).data('id'));
			$('.modal').modal('show');
		});

		$(document).on('click', 'button.deleteFinish', function(){
			var id = $('.modal').data('id');
			$.ajax({
				url: "/movie/delete/"+id,
				type: 'DELETE',
				success : function (result){
					if (result.result = 'success'){
						$("#mov_"+result.id).remove();
						$(".modal").modal('hide');
					}
				}
			});
		});
	});
</script>
@endsection('script')
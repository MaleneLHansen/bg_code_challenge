@extends('layout.main')

@section('title', 'Rediger kommentar til ' . $comment->movie->title)

@section('content')
	<form action="{{route('comment.update', $comment->id)}}" method="post">
		<input type="hidden" name="_method" value="put" />
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name" class="control-label">Titel</label>
		    	<input class="form-control" type="text" name="title" required value="{{$comment->title}}">
		    </div>
		</div>
		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="name" class="control-label">Navn</label>
		    	<input class="form-control" type="text" name="name" required value="{{$comment->name}}">
		    </div>
		</div>

		<div class="form-group">
		    
		    <div class="col-sm-8">
			<label for="description" class="control-label">Kommentar</label>
		    	<textarea class="form-control" name="body" col="5" rows="5">{{$comment->body}}</textarea>
		    </div>
		</div>

		<div class="col-md-12">
			<button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i>Opdater</button>
		</div>


	</form>
@endsection('content')
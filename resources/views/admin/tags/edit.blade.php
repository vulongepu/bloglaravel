@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

  <h2 class="text-center">
  	
      <div class="panel panel-default">
      	<div class="panel-heading">
      		Update tag {{ $tag->tag }}
      	</div>

      	<div class="panel-body">
      		<form action="{{ route('tag.update', ['id' => $tag->id ])}}" method="post" >
      			
      			{{ csrf_field() }}

      			<div class="form-group">
      				<label for="title">Name</label>
      				<input type="text" name="tag" id="" class="form-control" value="{{ $tag->tag }}">
      			</div>
      			
                <div class="form-group">
                	<button class="btn btn-success" type="submit">
                		Update tag
                	</button>
                </div>
      		</form>
      	</div>
      </div>

  </h2>

@stop
@extends('layouts.app')


@section('content')

 @include('admin.includes.errors')

  <h2 class="text-center">
  	
      <div class="panel panel-default">
      	<div class="panel-heading">
      		Create a new category
      	</div>

      	<div class="panel-body">
      		<form action="{{ route('tag.store') }}" method="post" >
      			
      			{{ csrf_field() }}

      			<div class="form-group">
      				<label for="title">Name</label>
      				<input type="text" name="tag" id="" class="form-control">
      			</div>
      			
                <div class="form-group">
                	<button class="btn btn-success" type="submit">
                		Store category
                	</button>
                </div>
      		</form>
      	</div>
      </div>

  </h2>

@stop
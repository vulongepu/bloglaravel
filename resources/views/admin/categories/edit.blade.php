@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

  <h2 class="text-center">
  	
      <div class="panel panel-default">
      	<div class="panel-heading">
      		Update category {{ $category->name }}
      	</div>

      	<div class="panel-body">
      		<form action="{{ route('category.update', ['id' => $category->id ])}}" method="post" >
      			
      			{{ csrf_field() }}

      			<div class="form-group">
      				<label for="title">Name</label>
      				<input type="text" name="name" id="" class="form-control" value="{{ $category->name }}">
      			</div>
      			
                <div class="form-group">
                	<button class="btn btn-success" type="submit">
                		Update category
                	</button>
                </div>
      		</form>
      	</div>
      </div>

  </h2>

@stop
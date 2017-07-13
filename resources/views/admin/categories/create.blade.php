@extends('layouts.app')


@section('content')

  @if(count($errors) > 0)
 
    <ul class="list-group">
       @foreach($errors->all() as $error)

         <li class="list-group-item text-danger">
             {{ $error }}
         </li>

       @endforeach
    </ul>
    
  @endif

  <h2 class="text-center">
  	
      <div class="panel panel-default">
      	<div class="panel-heading">
      		Create a new category
      	</div>

      	<div class="panel-body">
      		<form action="{{ route('category.store') }}" method="post" >
      			
      			{{ csrf_field() }}

      			<div class="form-group">
      				<label for="title">Name</label>
      				<input type="text" name="name" id="" class="form-control">
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
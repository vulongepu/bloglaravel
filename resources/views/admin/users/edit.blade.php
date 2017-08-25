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
      		Create a new user
      	</div>

      	<div class="panel-body">
      		<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
      			
      			{{ csrf_field() }}

      			<div class="form-group">
      				<label for="title">Name</label>
      				<input type="text" name="name" value="{{ $user->name }}" id="" class="form-control">
      			</div>
      			
           
      			<div class="form-group">
      				<label for="title">Facebook</label>
      				<input type="text"  value="{{ $user->facebook }}" name="facebook" id="" class="form-control">
      			</div>

            <div class="form-group">
              <label for="title">Youtube</label>
              <input type="text" name="youtube" id="" class="form-control">
            </div>

            <div class="form-group">
              <label for="title">About</label>
              <input type="text" name="about" id="" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Email</label>
              <input type="email" name="email" id="" class="form-control">
            </div>

      			<div class="form-group">
      				<label for="title">Password</label>
      				<input type="password" name="password" id="" class="form-control">
      			</div>
      			
                <div class="form-group">
                	<div class="text-center">
                		<button class="btn btn-success" type="submit">
                			Store post
                		</button>
                	</div>
                </div>
      		</form>
      	</div>
      </div>

  </h2>

@stop
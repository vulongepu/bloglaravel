@extends('layouts.app')

@section('content')
    
    <div class="panel panel-default">
    	<div class="panel-body">
    		<div class="table talbe-hover">
    		 <table class="table table-hover">
	    	<thead>
	    	                   <th>
                                    Image
                              </th>
                              <th>
                                    Title
                              </th>
                              <th>
                                    Editing 
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>
	    	<tbody>
	    		@foreach($postall as $post)
                   <tr>
                   	   <th><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100" height="50"></th>
                   	   <th>{{ $post->title }}</th>
                   	   <th><a href="{{ route('posts.edit', ['id' => $post->id ])}}">Edit</a></th>
                   	   <th><a href="{{ route('posts.delete', ['id' => $post->id ])}}">Del</a></th>

                   </tr>
	    		@endforeach
	    	</tbody>
	    	</table>
	    </div>
    	</div>
    </div>
    

@stop

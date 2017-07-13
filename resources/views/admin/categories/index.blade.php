@extends('layouts.app')

@section('content')
    
    <div class="panel panel-default">
    	<div class="panel-body">
    		<div class="table talbe-hover">
    		 <table class="table table-hover">
	    	<thead>
                              <th>
                                    Category name
                              </th>
                              <th>
                                    Editing 
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>
	    	<tbody>
	    		@foreach($categories as $category)
	                 <tr>
	                 	<td>
	                 		{{ $category->name }}
	                 	</td>
	                 	<td><a href="{{ route('categories.edit', ['id' => $category->id ])}}" class="btn btn-info btn-xs">
	                 		<span><span class="glyphicon glyphicon-pencil"></span></span>
	                 	</a></td>
	                 	<td><a href="{{ route('categories.del', ['id' => $category->id ])}}" class="btn btn-danger btn-xs">
	                 		x
	                 	</a></td>

	                 </tr>
	    		@endforeach
	    	</tbody>
	    	</table>
	    </div>
    	</div>
    </div>
    

@stop

@extends('layouts.app')

@section('content')
    
    <div class="panel panel-default">
    	<div class="panel-body">
    		<div class="table talbe-hover">
    		 <table class="table table-hover">
	    	<thead>
	    	                   <th>
                                    user
                              </th>
                              <th>
                                    name
                              </th>
                              <th>
                                    Permissions 
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>
	    	<tbody>
	    		@foreach($users as $user)
                    <tr>
                   	   <td><img src="{{asset($user->profile['avatar'])}}" alt="" width="60px" height="60px" style="border-radius: 50%"></td>
                       <td>{{$user->name}}</td>
                       <td>Permissions</td>
                       <td>Delete</td>

                   </tr> 
	    		@endforeach
	    	</tbody>
	    	</table>
	    </div>
    	</div>
    </div>
    

@stop

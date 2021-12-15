<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<!-- Return all todos -->
<div class="todos">
	<table class="table table-bordered table-striped">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Project_ID</th>
	        <th>Title</th>
	        <th>Author</th>
	        <th>Description</th>
	        <th>Status</th>
	      </tr>
	    </thead>

	    <tbody>		    		
	    		@foreach ($todos as $todo)
		    		<tr>
		    			<td>{{$todo->id}}</td>
    					<td>{{-- <a href="{{ route('todos.show', $todo) }}">{{$todo->project_id}}</a> --}}</td>
    					<td>{{$todo->title}}</td>
    					<td>{{$todo->author}}</td>
    					<td>{{$todo->content}}</td> 	
    					<td>{{$todo->status}}</td> 	
		    		</tr>   					    	 
    			@endforeach	
	    </tbody>
  	</table>
</div>

</body>
</html>
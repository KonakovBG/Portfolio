<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<!-- Return all messages -->
<div class="messages">
	<table class="table table-bordered table-striped">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Project_ID</th>
	        <th>Author</th>
	        <th>Content</th>
	      </tr>
	    </thead>

	    <tbody>
	    	@foreach ($messages as $message)
		      <tr>
			      <td>{{ $message->id }}</td>
			      <td>{{ $message->project_id }}</td>
			      <td>{{ $message->author }}</td>
			      <td>{{ $message->content}}</td>
		      </tr>
		    @endforeach
	    </tbody>
  </table>
</div>

</body>
</html>
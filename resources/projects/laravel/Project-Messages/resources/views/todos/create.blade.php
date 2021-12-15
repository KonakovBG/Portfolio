<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<!-- Show any errors -->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    

<!-- Store todo in database -->
<form action = "{{ route('todos.store') }}" method="post" class="form-group">
    @csrf	

    <label class="form-group">Project ID</label>
    <input type="text" name="project_id">

    <label>Title</label>
    <input type="text" name="title">
    
    <label>Author</label>
    <input type="text" name="author">

    <label>Content</label>
    <input type="text"  name="content">

    <label>Status</label>
    <input type="text"  name="status">

    <button type="submit" >Submit</button>
 </form>

</body>
</html>
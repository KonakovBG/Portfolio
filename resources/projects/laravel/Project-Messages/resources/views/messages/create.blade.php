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

<!-- Mesage store form -->
<form action = "{{ route('messages.store', $project) }}" method="post" class="form-group">
    @csrf	
    
    <label>Author</label>
    <input type="text" name="author">

    <label>Content</label>
    <input type="text"  name="content">

    <button type="submit" value="Add project" >Submit</button>
 </form>

</body>
</html>
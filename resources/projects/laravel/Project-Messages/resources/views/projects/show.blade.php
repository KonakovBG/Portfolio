<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title></title>
</head>
<body>

<!-- Return all projects -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
          <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">                     
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
              <a href="{{route("homepage")}}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                Home
              </a>

              <a href="{{route("projects.create")}}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
              	Insert Project
              </a>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="flex flex-col" style="margin: 0 50px;">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Author
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
	        	<tr>
	            	<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
	           	  		{{$project->id}}
	             	 </td>
	              	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                	{{$project->title}}
	              	</td>
	              	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                	{{$project->author}}
	              	</td>
	              	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                	{{$project->description}}
	              	</td>
	              	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                	{{$project->status}}
	              	</td>
	            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<h1 class="text-lg font-medium leading-6 text-gray-900" style="font-size: 30px; margin: 50px 30px;">Messages</h1>

<div class="flex flex-col" style="margin: 0 50px;">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Author
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Content
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($project->messages as $message)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{$message->id}}
                </td>                  
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$message->author}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$message->content}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<h1 class="text-lg font-medium leading-6 text-gray-900" style="font-size: 30px; margin: 50px 30px;">ToDos</h1>

<div class="flex flex-col" style="margin: 0 50px;">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Author
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Content
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($project->todoes as $todo)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{$todo->id}}
                </td>                  
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$todo->author}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$todo->title}}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$todo->content}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$todo->status}}
                </td>

                <td>
                  <form action="{{ route('todos.update', $todo )}}" method="post">
                    @csrf

                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >Finish</button>
                  </form>
                </td> 
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="mt-8 sm:mt-0" style="margin-left: 50px;">
  <div class="md:grid md:grid-cols-2">   
      

      <form action = "{{ route('messages.store', $project) }}" method="post" class="form-group" style="margin-top: 150px;">
        @csrf

        <div class="md:col-span-2">
          <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900" style="font-size: 30px;">Insert Message</h3>
          </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-1">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                  <input type="text" name="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                  <input type="text" name="content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>              

                <div class="col-span-6">
                  <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                  <input type="text" name="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>

      

      <form action = "{{ route('todos.store', $project) }}" method="post" class="form-group" style="margin-top: 150px;">
        @csrf

        <div class="md:col-span-2">
          <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900" style="font-size: 30px;">Insert Todo</h3>
          </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                  <input type="text" name="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="content" class="block text-sm font-medium text-gray-700">Title</label>
                  <input type="text" name="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div> 

                <div class="col-span-6 sm:col-span-4">
                  <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                  <input type="text" name="content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>              

                <div class="col-span-6">
                  <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                  <input type="text" name="status"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>

              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
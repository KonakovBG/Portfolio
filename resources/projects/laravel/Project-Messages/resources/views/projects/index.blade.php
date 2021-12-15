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

<div class="flex flex-col">
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
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                View Project
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
          	@foreach ($projects as $project)
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
	              	<td class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" style="margin: 10px 0;">
	                	<a href="{{ route('projects.show', $project) }}">View Project</a>
	              	</td>
	            </tr>
	        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</body>
</html>
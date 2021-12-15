<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

<div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
          <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">                     
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
              <a href="{{route("homepage")}}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                Home
              </a>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Store project in database -->
<form action = "{{ route('projects.store') }}" method="post" class="form-group">
    @csrf

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" style="margin-left: 50px; font-size: 30px;">Project</h3>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" name="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <input type="text" name="description" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>              

                      <div class="col-span-6">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <input type="text" name="status" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
    </div>
</form>
</body>
</html>
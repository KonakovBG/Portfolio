<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/add_contact.css">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pompiere&display=swap" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
		<div class="contact_book-header">
			<div class="header">
				<div class="lg:flex lg:items-center lg:justify-between">
				  <div class="flex-1 min-w-0">
				    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
				      Adress Book
				    </h2>
				    
				  <div class="mt-5 flex lg:mt-0 lg:ml-4">
				    <span class="hidden sm:block">
				      <a href="../add-contact.html"><button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				        Add Contact
				      </button></a>
				    </span>

				    <span class="hidden sm:block ml-3">
				      <a href="../contacts.php"><button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				        Contact List
				      </button></a>
				    </span>
				  </div>
				</div>
			</div>
		</div>
	</div>

		<div class="contact_book-content">
			<div class="contact_form">
				<div class="hidden sm:block" aria-hidden="true">
				    <div class="py-5">
				    </div>
				  </div>
				  <?php 
						$index = $_GET['var1'];

						$data = file('../csv/data.csv');

						$row = $data[$index];

						$row_pieces = explode(",",$row);
 

					?>

		    <div class="mt-5 md:mt-0 md:col-span-2">
				        <form action="save-contact.php" method="POST">
				          <div class="shadow overflow-hidden sm:rounded-md">
				            <div class="px-4 py-5 bg-white sm:p-6">
				              <div class="grid grid-cols-6 gap-6 container mx-auto">
				                <div class="col-span-6 sm:col-span-3">
				                  <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
				                  <input type="text" name="fname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="<?php echo $row_pieces[0] ?>">
				                </div>

				                <div class="col-span-6 sm:col-span-3">
				                  <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
				                  <input type="text" name="lname" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="<?php echo $row_pieces[1] ?>">
				                </div>

				                <div class="col-span-6 sm:col-span-4">
				                  <label for="email_address" class="block text-sm font-medium text-gray-700">Phone</label>
				                  <input type="text" name="phone" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"value="<?php echo $row_pieces[2] ?>">
				                </div>

				                 <div class="col-span-6 sm:col-span-4">
				                  <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
				                  <input type="text" name="email" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"value="<?php echo $row_pieces[3] ?>">
				                </div>            
				            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
				              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				                Submit
				              </button>
				            </div>
				          </div>
				        </form>
				      </div>
				    </div>
				  </div>						
			</div>
		</div>
	</div>

</body>
</html>

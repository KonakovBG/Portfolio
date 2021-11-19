<html>
<head>
  <title>Contact Form</title>

  <link rel="stylesheet" href="css/style.css" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
  	$(document).ready(function(){
  		$('#contact-form').on('submit', function (event) {
  			event.preventDefault();
  			var fname = $("#fname").val();
  			var lname = $("#lname").val();
  			var email = $("#email").val();
  			var message = $("#message").val();  			
  			$(".response").load("form-submit.php",{
                fname: fname,
                lname: lname,
                email: email,
                message:message
                
            });

  		});
  	});
  </script>
</head>
	<body>
		<form action="form-submit.php" id="contact-form" method="POST">	
			<h1>Sign up!</h1>	

			<div class="names">				
				<div class="row">
					<label for="fname">First name:</label>

	  				<input type="text" id="fname" name="fname">
				</div>	

				<div class="row">
					<label for="lname">Last name:</label>

	  				<input type="text" id="lname" name="lname">
				</div>				
	  		</div>

	  		<div class="row">
	  			<div class="email>">
					<label for="email">Email:</label>

					<input type="text" id="email" name="email"><br>
	  			</div>
			</div>

			<div>
				<div class="row">
		    		<label for="message"></label>

		  			<textarea id="message" name="message" rows="4" cols="50"placeholder="Write something here..."></textarea> 	  
	   	 		</div>
			</div>

	    	<div id="button-row">
	    		<button id="button">Submit</button>
	    	</div>
	    	<div class="response">
	    		<p></p>
	    	</div>
	</body>
</html>
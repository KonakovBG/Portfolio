<?php		
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			$errorEmpty = false;

			$errorEmail = false;
			

			if(empty($fname)||empty($lname)||empty($email)){		
   				echo "<span class='form-error'> Fill in all fields!</span>";		 
				$errorEmpty = true;								
			}

			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<span class='form-error'> Write a valid email!</span>";
				$errorEmail = true;

			}

			else{
				echo "<span class='form-success'> Email sent!</span>";
			}
		}

		else{
			echo "<span class='form-error'> There was an error!</span>";
		}

?>

	


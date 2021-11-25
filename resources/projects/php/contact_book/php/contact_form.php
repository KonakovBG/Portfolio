<?php

require __DIR__ . '/../vendor/autoload.php';

$error = [];
$contact_info = [];

$responseArray = [
	'status' => '',
	'message' => '',
	'errors' => []
];	

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$rules = [
	'fname' => 'required',
	'lname' => 'required',
	'phone' => 'requiredPhone',
	'email' => 'email',
];

foreach ($_POST as $name => $value) {
	$rule = $rules[$name];

	if ($rule == 'required') {
		if (empty($value)) {
			$responseArray['status'] = 'error';
			$responseArray['errors'][$name] = "Name is not valid!";
		} else {			
			test_input($value);

 			$contact_info[] = trim($value);
		}
	} else if ($rule == 'email') {
		if (empty($value) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$responseArray['status'] = 'error';
			$responseArray['errors'][$name] = "Email is not valid!";
		} else {
			$contact_info[] = trim($value);
		}
	} else if($rule == 'requiredPhone'){
		if (empty($value) || strlen($value) != 10){
			$responseArray['status'] = 'error';
			$responseArray['errors'][$name] = "Phone is not valid!";
		} else{
			$contact_info[$name] = trim($value);
		}

	}
}

// $column_names = ['First Name', 'Last Name', 'Phone', 'Email'];

if(empty($responseArray['errors'])){
	$writer = \League\Csv\Writer::createFromPath('../csv/data.csv', 'a');

	$writer->insertOne($contact_info);

	$responseArray['status'] = 'success';
	$responseArray['message']  = 'Successfully inserted record!';

	echo json_encode($responseArray);
} else {
	$responseArray['status'] = 'error';
	echo json_encode($responseArray);
} 







// if (filesize('../csv/data.csv') === 0) {
// 	$writer->insertOne($column_names);
// }

// $writer->insertOne($contact_info);




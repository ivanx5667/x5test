<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){

	$body=$_POST;
		$body= json_encode($body);
	print_r($body);
	
	$obj = json_decode($body);
// print $obj->{'text'}; 
	
		$text = $obj->{'text'};
// echo "<br>$text1<br>___";

// echo $speech;
// exit;
	switch ($text) {
		case 'hi':
			$speech = "Hi, Nice to meet you";
			break;

		case 'bye':
			$speech = "Bye, good night";
			break;

		case 'anything':
			$speech = "Yes, you can type anything here.";
			break;
		
		default:
			$speech = "Sorry, I didnt get that. Please ask me something else.";
			break;
	}

	$response = new \stdClass();
	$response->fulfillmentText = $speech;
	
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>

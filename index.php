<?php 

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	
	
		$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$text = $json->queryResult->parameters->text;
	
	
	
	// $body=$_POST;
		// $body= json_encode($body);
	// $obj = json_decode($body);
	// $text = $obj->{'queryResult'}->{'queryText'};
		
		
		

	switch ($text) {
		case 'hook':
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
	
	// $response->speech = $speech;
	// $response->displayText = $speech;
	// $response->source = "webhook";
	
	echo json_encode($response);
// return json_encode($response);
// echo '123123';
}
else
{
	echo "Method not allowed";
}

?>

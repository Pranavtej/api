<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type');
header('Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
//require './connect.php'; // database connection file
 
// operations to get data from database
 
// example data formate


$data = ['name' => 'John Doe', 'email' => 'jon@doe.com'];
// make data json type

	$json_response = json_encode($data);
	echo $json_response;


?>
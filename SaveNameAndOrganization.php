<?php 
// require utilities
require 'utilities/utilities.php';

// file path
$filePath = "C:/Users/Kingsley/cs4540/PyBool/python/count/NameAndOrganization.txt";

$username = $_REQUEST['name'];
$organization = $_REQUEST['organization'];

// save name and organization to the file
nameAndOrganization($filePath, $username, $organization);

// The JSON standard MIME header.
//header('Content-type: application/json');
//echo json_encode($data);
?>

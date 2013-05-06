<?php
// generate a unique id
$id = uniqid();

// php calls python to run the python code to generate a graph
// or to generate a error.txt
$temp = exec("C:\\Python27\\python.exe C:\\Users\\Kingsley\\cs4540\\PyBool\\python\\test.py"." ".$id, $a);

// file path
$errorTxt = "C:/Users/Kingsley/cs4540/PyBool/python/error".$id.".txt";


// image path
$image =  "python\images.jpg";

// output.txt path
$outputTxt = "C:/Users/Kingsley/cs4540/PyBool/python/output".$id.".txt";

// array to save the result
$data = array();

// determine if the error.txt is generated
$result = false;

// if the error.txt does not exist, generate a graph
if (file_exists($errorTxt))
{
	// add flag
	array_push($data, $result);
	
	// add content of error.txt
	array_push($data, file_get_contents($errorTxt));
	
	// remove file
	unlink($errorTxt);
	
	// The JSON standard MIME header.
	header('Content-type: application/json');
	echo json_encode($data);
}
else
{
	$result = true;
	
	// add flag
	array_push($data, $result);
	
	// add image url
	array_push($data, $image);
	
	// add content of output.txt
	array_push($data, file_get_contents($outputTxt));
	
	// remove file
	unlink($outputTxt);
		
	// The JSON standard MIME header.
	header('Content-type: application/json');	
	echo json_encode($data);
}

?>
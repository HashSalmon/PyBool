<?php
// require utilities
require 'utilities/utilities.php';

// delete old images
deleteOldImages();

//The JSON standard MIME header.
//header('Content-type: application/json');
//echo json_encode($test);

// generate a unique id
$id = uniqid();

// get the file content from formula area
$fileContent = $_REQUEST['file'];

// the path of generated uniquid.txt
$uniqidTxt = "C:/Users/Kingsley/cs4540/PyBool/python/".$id.".txt";

// generate a uniqid.txt file on the server
generateUniqidTxt($uniqidTxt, $fileContent);

$output = 0;

// path of executing python
$pythonExe = "C:\\Python27\\python.exe C:\\Users\\Kingsley\\cs4540\\PyBool\\python\\buildBDDMin.py"." ".$id;

// php calls python to run the python code to generate a graph
// or to generate a error.txt
$output=exec("C:\\Python27\\python.exe C:\\Users\\Kingsley\\cs4540\\PyBool\\python\\buildBDDMin.py"." ".$id);

// remove uniqid.txt
unlink($uniqidTxt);

// python script timed out
if ($output == 124)
{
	// path of files
	$errorTxt = "";
	$uniqidDot = "";
	$uniqidPng = "";
	
	$data = array();
	
	// error message
	$errorOutput = "Your execution timed out. Please try again with a smaller problem or run PyBool on your own machine.";
	$var = "timeOut";
	
	array_push($data, $var);
	// put error output to the array
	array_push($data, $errorOutput);
	
	// remove uniqid.txt
	unlink($uniqidTxt);
	
	// remove error.txt
	unlink($errorTxt);
	
	// remove uniqid.dot
	unlink($uniqidDot);
	
	// remove uniqid.png
	unlink($uniqidPng);
	
	// The JSON standard MIME header.
	header('Content-type: application/json');
	echo json_encode($data);
}
else
{
	// file path
	$errorTxt = "C:/Users/Kingsley/cs4540/PyBool/python/error".$id.".txt";
	
	// image path
	$image =  "python\\images\\".$id.".png";
	
	// output.txt path
	$outputTxt = "C:/Users/Kingsley/cs4540/PyBool/python/programoutput".$id.".txt";
	
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
	
		// remove  programoutput.txt file
		unlink($outputTxt);
	
		// The JSON standard MIME header.
		header('Content-type: application/json');
		echo json_encode($data);
	}
}

?>

















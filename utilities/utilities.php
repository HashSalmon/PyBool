<?php

/*
 * generate a file with an uniqid name
 */
function generateUniqidTxt($filePath, $fileContent) 
{
	file_put_contents($filePath, $fileContent);
}

/*
 * delete all images which are more than 100 seconds
 */
function deleteOldImages()
{
	// the path of images 
	$dirPath = "C:/Users/Kingsley/cs4540/PyBool/python/images";
	$handle = opendir($dirPath);
	
	// get the current time
	$currentTime = time();
	
	$mTime = 0;

	// read all files
	while (false !== ($entry = readdir($handle)))
	{	
		
		// save the modified time for this file
		$mTime = filemtime($dirPath."/".$entry);
		
		// delete images
		if (($currentTime - $mTime) > 20 && !is_dir($dirPath."/".$entry))
		{
			unlink($dirPath."/".$entry);
		}
	}
}

?>
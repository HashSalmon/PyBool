<?php 
// require utilities
require 'utilities/utilities.php';

// file path
$filePath = "C:/Users/Kingsley/cs4540/PyBool/python/count/pblCount.txt";

// record visit count
incrementCounter($filePath);

// require view pybool
require 'views/PBL.php';

?>

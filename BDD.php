<?php 
// require utilities
require 'utilities/utilities.php';

// file path
$filePath = "C:/Users/Kingsley/cs4540/PyBool/python/count/bddCount.txt";

// record visit count
incrementCounter($filePath);

// require view BDD
require 'views/BDD.php';

?>

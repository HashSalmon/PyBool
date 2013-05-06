<html>
<head>
	<title>BDD Page</title>
	<link rel="stylesheet" type="text/css" href="styles/bdd.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"
	type="text/javascript"></script>
	<script src="scripts/bdd.js"></script>
</head>

<body>
<header class="bddHeader">
	This is the header
</header>

<section class="bddBody">
	<h2>Binary Decision Diagram Online</h2>
	<p>
	Hello and welcome to the online interface to PBDD, a Python implementation of a binary decision diagram (BDD). If you don't know what a BDD is check out the great wikipedia page. Donald Knuth calls BDDs "one of the only really fundamental data structures that came out in the last twenty-five years". You can watch an excellent lecture by him about BDDs here.The specification of the language can be found here. Feel free to browse the examples They are commented and a complete list can be found here. Click here to download the package (a small amount of code and very readable).
	Currently the online interface does not support graphic generation, however the package itself does.
	</p>
	
	<h2>PBDD uses the following packages and resources:</h2>

	<ul>
		<li>Anderson's notes	 -	main implementation strategy</li>
		<li>PyBool	 -	for managing boolean formula</li>
		<li>Dot language	 -	for outputting attractive pdf files</li>
	</ul>
	
	<h2>Note</h2>
	<p>
	Please note that the online interface will not handle large formulas (no more than14 variables). For larger formulas please download the package.
	Also this is written in a very basic cgi script. Be patient when loading!
	</p>
	
	<h2>ENTER YOUR FORMULA HERE</h2>
	<textarea class="formulaArea" cols="80" rows="25">
	</textarea>
	
	<img class="imageArea" src="" width="300" height="300"/>
	
	<div>
	<button id="previous">Previous</button>
	<button id="next">Next</button>
	<button id="buildBDD">Build BDD</button>
	<button id="buildMinimumBDD">Build minimum BDD</button>
	</div>
	
	<div>
	<h2>PROGRAM OUTPUT</h2>
	<textarea class="outputArea" cols="80" rows="25" readonly>
	</textarea>
	</div>
	
	
	<p>PBDD and this webpage is by Tyler Sorensen at University of Utah under the supervision of Professor Gopalakrishnan</p>
	<p>Tyler is part of the Gauss Group</p>
	<p>contact: t DOT sorensen AT utah.edu</p>
	
</section>


<footer class="bddFooter">
	This is footer
</footer>

</body>
</html>
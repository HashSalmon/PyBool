<html>
<head>
<title>BDD Interface</title>
<link rel="stylesheet" type="text/css" href="styles/index.css">
<link rel="stylesheet" type="text/css"
	href="styles/bootstrap-responsive.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"
	type="text/javascript"></script>
<script src="scripts/bdd.js"></script>
</head>

<body>
	<!-- Header -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<a class="brand" href="index.php">PBL</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="index.php">About</a>
						</li>
						<li><a href="pybool.php">PBL Interface</a>
						</li>
						<li  class="active"><a href="BDD.php">BDD Interface</a>
						</li>
						<li><a>Download</a>
						</li>
						<li><a>People</a>
						</li>
						<li><a href="http://www.cs.utah.edu/formal_verification/">Gauss Group</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- body -->
	<div class="container">
		<div class="hero-unit">
			<h2>Binary Decision Diagram Online</h2>
			<p>Hello and welcome to the online interface to PBDD, a Python
				implementation of a binary decision diagram (BDD). If you don't know
				what a BDD is check out the great wikipedia page. Donald Knuth calls
				BDDs "one of the only really fundamental data structures that came
				out in the last twenty-five years". You can watch an excellent
				lecture by him about BDDs here.The specification of the language can
				be found here. Feel free to browse the examples They are commented
				and a complete list can be found here. Click here to download the
				package (a small amount of code and very readable). Currently the
				online interface does not support graphic generation, however the
				package itself does.</p>

			<h2>PBDD uses the following packages and resources:</h2>

			<ul>
				<li>Anderson's notes - main implementation strategy</li>
				<li>PyBool - for managing boolean formula</li>
				<li>Dot language - for outputting attractive pdf files</li>
			</ul>

			<h2>Note</h2>
			<p>Please note that the online interface will not handle large
				formulas (no more than14 variables). For larger formulas please
				download the package. Also this is written in a very basic cgi
				script. Be patient when loading!</p>

			<div class="row">
				<div class="span5">
				<h3>ENTER YOUR FORMULA HERE</h3>
				<textarea class="formulaArea">
				</textarea>
				</div>
				
				<div class="span5">
				<h3>PROGRAM OUTPUT</h3>
				<textarea class="outputArea">
				</textarea>
				</div>			
			</div>

			<div>
				<button class="btn btn-inverse" id="previous">Prev</button>
				<button class="btn btn-inverse" id="next">Next</button>
				<button class="btn btn-info" id="buildBDD">Build BDD</button>
				<button class="btn btn-success" id="buildMinimumBDD">Build minimum BDD</button>
			</div>

		<div class="imageArea">
		<h2>GRAPH OUTPUT</h2>
		<img class="imageArea" src="" width="500" />
		</div>

		<footer>
			<p>Tyler's By Pool</p>
		</footer>
	</div>

</div>

</body>
</html>

<?php
	include("db.php");
	$flag = 0;

	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}

	if($_SERVER['REQUEST_METHOD']==='POST'){
		$search_term = $_POST['search_term'];

		$sql = "SELECT * FROM login WHERE username='".$search_term."'";
		if ($conn->query($sql) === TRUE) {
			$flag = 1;
		} else {
			$flag = 2;
		}
	}
?>
<html>
<head>

  <meta charset="UTF-8">

<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>Employee Search</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">



<style>
body {
	font-family: "Playfair Display", serif;
	font-size: 1rem !important;
}

h1 {
	font-size: 3rem !important;
}

h2 {
	font-size: 2.3rem !important;
}

.border-gray {
	border: 1px solid grey;
	width: 48%;
}

.user-row {
	display: flex;
	align-items: center;
	padding-left: 3%;
	margin-bottom: 5%;
}

.user-row img {
	border-radius: 50%;
}

.user-row span {
	padding-left: 2%;
}

.data-box li {
	padding-left: 3%;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <main class="container center-align">
    	<h1>Search Users</h1>

    	<section class="row">
    		<form class="col s12" action="" method="POST">
    			<div class="row">
    				<div class="input-field col s12">
    					<input id="name" name="search_term" type="text" class="validate col s9 valid">
    					<label for="name" class="active">Type your search</label>
    					<input type="submit" class="waves-effect waves-light btn-small col s3">
    				</div>
    			</div>
		</form>
		<?php
			if($flag===1){
				echo "<label>Employee ".$search_term." was found</label>";
			}
			if($flag===2){
				echo "<label>Employee ".$search_term." was not found<label>";
			}
		?>

    	</section>

    	    </main>








</body>
</html>

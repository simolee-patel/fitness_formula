<?php
session_start();
if(!isset($_SESSION['username']))
?>
<html>
<head>
	<title>myweb</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Cache-control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="homest.css">
</head>
<body>
<div class="row clearfix">
			<ul class="main-nav" id="check-class">
			<b>
				<li><a href="extip.php">expert tips</a></li>
				<li><a href="yoga.php">yoga</a></li>
				<li><a href="exercise.php">exercise</a></li>
				<li><a href="diat.php">juice</a></li>
				<li><a href="lo.php">log out</a></li>
				<b>
			</ul>
			<img src="navbar.svg" onClick="sliding()" id="bars" class="bar">
		
	</div>
	<div id="name">
			<h2>Welcome....  </h2>
			<h1><?php echo $_SESSION['uaername'];?>   </h1>
	</div>
	</header>
	
	<script type="text/javascript">
		function sliding()
		{
			var x= document.getElementById('check-class');
			if(x.style.display === "none"){
				x.style.display="block";

			}else{
				x.style.display="none";
			}
		}
		</script>	
	
</div>
</body>        
</html>
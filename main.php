<!DOCTYPE html>
<html>
<head>
	<title>myweb</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<body>
	<header>
       
        <div class="row clearfix">
        <h2 class="logo">fitness formula</h2>
			<ul class="main-nav" id="check-class">
				<li><a href="services.html">service</a></li>
				<li><a href="contact.html">contact_us</a></li>
			</ul>
			<img src="navbar.svg" onClick="sliding()" id="bars" class="bar">
		</div>
		<div class="title">
            <h4>get <span class="colorchange">sweat</span></h4>
            <p>sweat is your fat crying best ideas for fat burning...</p>
            <a href="login.php" class="btn">get started...</a>
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
</body>
</html>
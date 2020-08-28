<!DOCTYPE html>
<html>
<head>
	<title>helloo</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="logout">
<a href="login.php"><img id="back" src="back.svg"></a>
</div>

	 <div class="container">
	 	<div class="row"> 
            <h2>sign in</h2>
            <div>
            </div>
			<form action="register.php" method="post">
				<div class="form-group">
					<input type="text" name="user" class="form-control" placeholder="user name">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="password">
				</div>
				<br>
				<button class="btn">sign in</button><br><br>
				<a href="login.php">already have account ?</a>
			</form>	 			
	 	</div>
	 </div>
	 <div class="guide">
		 <p>username should be more the 4 charactor</p>
		 <p>passwor should be more then 8 charactors</p>
	 </div>
</body>
</html>
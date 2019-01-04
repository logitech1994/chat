<!DOCTYPE html>
<html>
<head>
	<title>Academy CHAT</title>
		<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap-3.3.6/dist/css/bootstrap.min.css" />
		<script src="css/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<style>
	#login_form{
		width:350px;
		height:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Kirish</center></h2>
		<hr>
		<form method="POST" action="login.php">
		Login: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Parol: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Kirish</button><!--  No account? <a href="signup.php"> Sign up</a> -->
		</form>
		<div style="height: 15px;"></div>
		<!-- <div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div> -->
	</div>
</div>
</body>
</html>
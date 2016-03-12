<?php
	session_start();
	require_once('database.php');
	require_once 'user-db.php';
	if(isset($_SESSION['isLogin']))
	{
		header('location: profile.php');
		exit();
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		 <title>TrekkPH</title>
	</head>
	<body>
		<?php include 'loginHeader.php'; ?>
		<div style="margin-left:360px; margin-top:-310px; width:500px; position:absolute;">
			<div class="login">
				<div class="heading">
					<?php
						$msg = '';
											
						if (isset($_POST['login']))
						{
							$user = trim($_POST['user']);
							$pass = trim($_POST['pass']);
											
							foreach(user_list() as $u)
							{
											
								if(($user==$u['username'] && $pass==$u['password']))
								{
									//generate a unique session id
									$name = $u['name'];
									$_SESSION['islogin'] = true;
									$_SESSION['user'] = $user;
									$_SESSION['pass'] = $pass;
											
									header('location: profile.php');
									exit();
											
								}
								else
								{
									$msg ="Username and Password doesn't match.";
								}
							}
						}
					?>
					<div class="col-md-10 col-md-offset-3 col-sm-8 col-sm-offset-2">
					  <div class="panel panel-default">
						<div class="panel-body">
							<center>
								<h3>Log in</h3>
								<form  method = "post">
								<div class="col-md-12">
									<input type="text" name="user" class="form-control" placeholder="Username or email" />
									<span class="glyphicon glyphicon-user"></span>
									<span class="help-block"></span>
								 </div>
									
								<div class="col-md-12">
									<input type="password" name="pass" class="form-control" placeholder="Password"/>
									<span class="glyphicon glyphicon-lock"></span>
									<span class="help-block"></span>
								</div>
								<span class="help-block"></span>
								<button type="submit" name="login" class="btn btn-md btn-primary">Login</button>
								<span class="help-block"></span>
								<?php echo $msg;?>
								<small>
									<a href="#" style="text-decoration:none;">FORGOT PASSWORD? </a><br>
									Don't have an Account? <a href="register.php" style="text-decoration:none;">Create Now.</a>
									<span class="help-block"></span>
								</small>
								
							   </form>
							</center>
						</div>
					  </div>
				   </div>
				</div>
			</div>
		</div>
	</body>
</html>
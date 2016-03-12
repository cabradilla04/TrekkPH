<?php
	require_once('database.php');
	require_once 'user-db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <title>Profile</title>
	</head>
	<body>
		<?php include 'profileHeader.php'; ?>
		<div class="container" >
		  <div class="well" >
			<div class="row" >
			  <div class="col-lg-12" align="center">
				<div class="col-md-5"></div>  
				<?php
					foreach(user_list() as $u) { 
		
						if($_SESSION['user']==$u['username'])
						{
							search($u['username']);
					
						} 
					}
					$id = $u['userID'];
					foreach(user_list2() as $p){
						if($u['userID']==$p['profID']){
							search2($id);		
						}
					}
				?>
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				  <div class="panel panel-default">
					<div class="panel-body">
					  <h2 class="thin text-center">User Profile</h2>
					  <hr>
					  <image src="images/un.jpg" height="220px" width="240px" align="left">
					  <h4>
					  <span class="help-block"></span>
					  <span class="help-block"></span>
					  <table >
						<tr>
							<td>
								Username
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $u['username'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Lastname
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $p['profLName'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Firstname
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $p['profFName'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Email
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $u['userEmail'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Birthday
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $p['profBirthday'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Age
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $p['profAge'];?>
							</td>
						</tr>
						<tr height="10px"></tr>
						<tr>
							<td>
								Gender
							</td>
							<td width="20px"></td>
							<td>
								<?php echo $p['profSex'];?>
							</td>
						</tr>
					  </table>
					  </br>
					  </br>
					  <hr>
					  <a href="edit.php" style="text-decoration:none;">
						<button type="submit" name="edit" class="btn btn-md btn-primary">Edit Profile</button>
					  </a>
					  <!--a href="pass.php"style="text-decoration:none; >
						<button type="submit" name="change" class="btn btn-md btn-primary">Change Password</button>
					  </a-->
					  </h4>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
	</body>
</html>
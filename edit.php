<?php
	require_once('database.php');
	require_once 'user-db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <title>Edit Profile</title>
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
					
					if(isset($_POST['edit'])){
						$user = $_POST['user'];
						$email = $_POST['email'];
						$lname = $_POST['lname'];
						$fname = $_POST['fname'];
						$birthday = $_POST['birthday'];;
						$gender = $_POST['gender'];
						$age = $_POST['age'];
						update2($user, $email,$id);
						update($lname, $fname, $birthday, $gender,$age,$id);
						header('location: profile.php');
						
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
					  <form  method="POST">
						  <table >
							<tr>
								<td>
									Username
								</td>
								<td width="20px"></td>
								<td>
									<input type="text" name="user" value='<?php echo $u['username'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td>
									Lastname
								</td>
								<td width="20px"></td>
								<td>
									<input type="text" name="lname" value='<?php echo $p['profLName'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td>
									Firstname
								</td>
								<td width="20px"></td>
								<td>
									<input type="text" name="fname" value='<?php echo $p['profFName'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td>
									Email
								</td>
								<td width="20px"></td>
								<td>
									<input type="email" name="email" value='<?php echo $u['userEmail'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td>
									Birthday
								</td>
								<td width="20px"></td>
								<td>
									<input type="date" name="birthday" value='<?php echo $p['profBirthday'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td>
									Age
								</td>
								<td width="20px"></td>
								<td>
									<input type="number" name="age" value='<?php echo $p['profAge'];?>'>
								</td>
							</tr>
							<tr height="10px"></tr>
							<tr>
								<td >
									Gender
								</td>
								<td width="20px"></td>
								<td >
									<input type="radio"  value="Male" name="gender">&nbsp;Male&nbsp;&nbsp;&nbsp;
									<input type="radio" value="Female" name="gender">&nbsp;Female
								</td>
							</tr>
						  </table>
						  <span class="help-block"></span>
						  </br>
						  <br>
						  <button type="submit" name="edit" class="btn btn-md btn-primary">Save</button>
						  <a href="profile.php" type="submit" class="btn btn-md btn-primary" onclick="return confirm('Are you sure?')">Cancel</a>
						 </form>
					  </br>
					  </br>
					  <hr>
						
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
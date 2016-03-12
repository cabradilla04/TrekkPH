<?php
	require_once('database.php');
	require_once 'user-db.php';
?>
<div style="margin-left:625px; margin-top:-400px; width:740px; position:absolute;">
            <div class="col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-default">
                <div class="panel-body">
					
					<center>
						<h3>Sign Up</h3><br>
					</center>
					<form action="signup.php" method="post">
					<div class="col-md-12">
					  <input type="text"	class="form-control" name="user" placeholder="Username  " required />
					  <span class="glyphicon glyphicon-user"></span>
					  <span class="help-block"></span>
					</div>
					<div class="col-md-12">
					  <input type="text"	class="form-control" name="fname" placeholder="Firstname  " required />
					  <span class="glyphicon glyphicon-user"></span>
					  <span class="help-block"></span>
					</div>
					<div class="col-md-12">
					  <input type="text"	class="form-control" name="lname" placeholder="Lastname  " required />
					  <span class="glyphicon glyphicon-user"></span>
					  <span class="help-block"></span>
					</div>
					<div class="col-md-12">
					  <input type="email"	class="form-control" name="email" placeholder="Email  " required />
					  <span class="glyphicon glyphicon-envelope"></span>
					  <span class="help-block"></span>
					</div>
					<div class="col-md-12">
					  <input type="password"	class="form-control" name="pass" placeholder="Password  " required />
					  <span class="glyphicon glyphicon-lock"></span>
					  <span class="help-block"></span>
					</div>
					<div class="col-md-12">
					  <table>
						<tr>
							<td>
								<h5>Birthday</h5>
							</td>
							<td width="40px"></td>
							<td>
								<input type="date" class="form-control" name="birthday" required>	
							</td>
						</tr>
					  </table>
					  <span class="help-block"></span>
					  <table>
						<tr>
							<td width="50px">
								<h5>Age</h5>
							</td>
							<td width="40px"></td>
							<td width="180px">
								<input type="number" class="form-control" name="age" required>
							</td>
						</tr>
					  </table>	
					  <span class="help-block"></span>
					  <table>		
						<tr>
							<td width="50px">
								<h5>Gender</h5>
							</td>
							<td width="40px"></td>
							<td width="50px">
								<input type="radio"  value="Male" name="gender">&nbsp;Male
							</td>
							<td width="40px"></td>
							<td width=90px">
								<input type="radio" value="Female" name="gender">&nbsp;Female
							</td>
						</tr>
					  </table>	
					  <span class="help-block"></span>
					</div>
					<br>
					<center>
					<button type="submit" name="signup" class="btn btn-md btn-primary">Sign Up</button>
					</form>
					<br>
					<span class="help-block"></span>
					<small>
						Already have an account? <a href="login.php">Login</a>
					</small>
					</center>
					<br>
				 </div>
              </div>
          
          </div>
    </div>
</div>
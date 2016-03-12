<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TrekkPH</a>
        </div>
		<div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
					<a href="profile.php"><?php echo $_SESSION['user']; ?></a>
				</li>
				<li><a href="logout.php">Logout&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"></span></a></li>
              </ul>
    </nav>
    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

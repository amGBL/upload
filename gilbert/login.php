<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="font-6/css/all.css">
	<title>login page...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	.container{
		position: relative;
		top: 10vh;
		box-shadow: 0 0px 0 0px rgba(0, 0, 0, 0.4),0 0 20px 0 rgba(0, 0, 0, 0.19);
		background: white;
		height: 300px;

	}
	a{
		text-decoration: none;
	}
	#login{
		width: 95%;
	}
</style>
<body>
		<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
         <p class="navbar-brand col-lg-3 me-0 text-primary">user login</p>
          <ul class="navbar-nav col-lg-6">
            <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="login.php"><strong>LOGIN</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" href="signup.php">Register</a>
            </li>
          </ul>
        </div>
      </div>  
    </nav>
    <hr>
    <div class="bg-light" style="height: 500px;position: relative;top: -15px;">
    	<form action="login_check.php" method="POST" class="fullpageLoyout container-fluid">
			<div class="container w-50 text-center rounded">
			<h1>login here</h1>
			<div class="form-group m-3">
				<input type="text" class="form-control " name="username" placeholder="username..." required>
			</div>
			<div class="form-group m-3">
				<input type="password" class="form-control " name="password" placeholder="password..." required>
			</div>
			<button class="btn btn-success" type="submit" name="submit" id="login">login here</button>
			<hr>
			<div>
				<p>if don't have an account click<a href="signup.php">  create account</a></p>
			</div>
	</div>
		</form>
    </div>
		

</body>
</html>
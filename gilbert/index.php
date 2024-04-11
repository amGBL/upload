<?php
include'conn.php';
session_start();
if (!$_SESSION['username']) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="font-6/css/all.css">
	<title>home page...</title>
</head>
<style type="text/css">
  html,body{
  text-transform: capitalize;
  margin: 0px;
  padding: 0px;
  overflow-x: hidden;
/*  overflow-y: hidden;*/
}
.hero-image {  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("one.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.anim{
  height: 500px;
  width: 100%;
  object-fit: cover;
}
a{
  text-decoration: none; 
  padding: 5px;
}
.footer{
  height: 160px;
  background: ghostwhite;
}
i{
  font-size: 20px;
}
.course{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}
.one{
  width: 50%;
  margin-left: 100px;
}

.line{
  height: 3px;
  background: blue;
  width: 30%;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example" id="top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
         <p class="navbar-brand col-lg-3 me-0 text-primary">welcome to my dashboard</p>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" href="#">about us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  mx-4" aria-disabled="true">contact us</a>
            </li>
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <a href="logout.php" style="position: relative; top: 5px;"><button class="btn btn-primary">logout here</button></a>
          </div>
        </div>
      </div>
    </nav>
<main>

  <div class="container marketing m-5 text-center">
    <div class="row">
      <div class="col-lg-4">
        <img src="./asset/7.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-primary" href="upload.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <img src="./asset/8.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-primary" href="upload.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <img src="./asset/9.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-primary" href="upload.php">View details &raquo;</a></p>
      </div>
    </div>
     <!-- =================================================================== -->
    <footer class="footer">
      <div class="row">

        <p class="col">
          
        </p>

        <p class="col" style="position: relative;top: 70px;">
          <a href="#top">top</a>
          <a href="#about us">about us</a>
          <a href="">privacy</a>
          <a href="">terms</a>
          <a href="">contact us</a>
        </p>

        <p class="col" style="position: relative;top: 70px;">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-youtube" style="color:red"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-linkedin" style="color:red"></i></a>
        </p>


      </div>
    </footer> 
    
</body>
</html>
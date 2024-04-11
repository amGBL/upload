<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<title>upload page....</title>
</head>
<style type="text/css">
	a{
		text-decoration: none;
	}
</style>
<body>
 	<center>
 		<form class="w-50 my-5" action="upload_check.php" method="POST" enctype="multipart/form-data">
 		<div class="form-group">
 			<input type="file" name="image" placeholder="choose file" class="form-control m-2 my-5" style="position: relative;top: 40px">
 		</div>
 		<div class="form-group">
 			<input type="submit" name="submit" value="upload" class="btn btn-primary">
 		</div>
 		<p>if you don't need to upload click<a href="index.php">  back</a></p>
 	</form>
 	</center>
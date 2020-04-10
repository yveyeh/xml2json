<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Yufenyuy Veyeh Didier">
	<title>xml2json | Convert XML to JSON</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	<div class="wrapper">
		<div class="text-center col-md-4 col-md-offset-4">
			<p class="welcome text-success">Convert your XML file to JSON</p>
		</div>
		<div class="file-loader text-center col-md-4 col-md-offset-4">
			<form class="form form-inline" action="php/import.php" method="post" enctype="multipart/form-data">
				<div class="form-group text-center">
					<h4 class="text-primary">Upload file by clicking on "Choose File"</h4>
					<br>
					<input class="form-control" type="file" name="file" />
					<input class="btn btn-primary" type="submit" value="Convert" />
					<br><br>
					<p class="text-danger"><i>*Please make sure you upload an xml file.</i></p>
				</div>
			</form>
		</div>
		<div class="text-center col-md-4 col-md-offset-4"><br><br><br>
			<p class="text-success">
				Note: You can also convert your excel files to json, by saving in xml format and then uploading here.
			</p>
		</div>
	</div>
</body>

</html>
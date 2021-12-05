<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="keywords" content="excel to json, xml to json, xml2json, excel to xml">
	<meta name="author" content="Yufenyuy Veyeh Didier">
    <!-- Title -->
	<title>xml2json | Convert XML to JSON</title>
    <!-- CSS files -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="wrapper">
		<div class="text-center col-md-4 col-md-offset-4">
			<p class="welcome text-success">Convert your XML file to JSON</p>
            <p class="text-success">
				Note: You can also convert your excel files to json, by saving in xml format and then uploading here.
			</p>
		</div>
		<div class="file-loader col-md-4 col-md-offset-4">
			<form class="form" action="php/import.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <!-- Define the object keys -->
                    <h4 class="text-primary text-left"><span>1.</span> Enter the keys of the JSON separated by ",".</h4>
                    <textarea  class="form-control"  name="keys" rows="3" required></textarea>
                    <br><br>
                    <!-- Upload the xml file -->
					<h4 class="text-primary text-left"><span>2.</span> Upload file by clicking on "Choose File".</h4>
					<input class="form-control" type="file" name="file" accept=".xml" required/>
                    <p class="text-danger"><i>*Please make sure you upload an xml file.</i></p>
					<br><br>
                    <!-- Submit the form -->
                    <div class="text-center">
                        <input id="btn-convert" class="btn btn-primary" type="submit" value="Convert" disabled/>
                    </div>
				</div>
			</form>
		</div>
		<div class="text-center col-md-4 col-md-offset-4"><br><br><br>
			<a class="text-success" href="https://www.tenshnova.com/" target="_blank">
                <?php echo '&copy; ' . date('Y') . '. Tenshnova' ?>
            </a>
		</div>
	</div>
</body>

<!-- JS files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</html>
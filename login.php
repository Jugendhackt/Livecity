<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>livecity</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <center><div id="wrapper" style="background-color: rgba(255, 255, 255, 0.9);">
		<img src="titel.png" height="200px">
			<div id="content">
			Geht es dir schlecht?<br>
			Oder willst du nur deine Stadt verschönern?<br>
			Dann probier doch mal Livecity!<br><br>
			<form method="POST" action="login.php">
				<p>Benutzer:</p>
				<input name="username" size="40" maxlength="250"><br>
				<p>Passwort:</p>
				<input name="pass" type="password" size="40" maxlength="250"><br><br>
				<input type="submit" name="submit" value="Einloggen">

			</form> 
				

			</div>
	</div>
			</div>
	</center>
	<?php
		if(isset($_POST["username"])){
			$pdo = new PDO('mysql:host=localhost;dbname=lifecity', 'root', ''); //Neue Sitzung zum SQL.Server wird gestartet
			$sql = "SELECT * FROM `user` WHERE username='". $_POST["username"]."' AND pass='". $_POST["pass"]."'"; //Wähle Spalte username,passavatar aus der Tabelle user aus
			$received = $pdo->query($sql);
			//echo $sql; //Erstes echo
			//print_r($received);
			//echo $received->rowCount();
			if ($received->rowCount() > 0){
				header("Location:index.php"); 
			}
			else{
								header("Location:fehler.html"); 

				
			}
		}
		?>

	


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

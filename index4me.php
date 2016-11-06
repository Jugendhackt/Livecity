<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>lifecity</title>
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
	<script type="text/javascript">
	  function toggle(id){
		var e = document.getElementById(id);
		 
		if (e.style.display == "none"){
		   e.style.display = "";
		} else {
		   e.style.display = "none";
		}
	  }
	  
	</script>
	<script src="canvasjs.min.js"></script>

</head>

<body>
<div id="user"><center><img id="userbild" src="user.jpg"><br><i class="fa fa-star fa-lg"></i><i class="fa fa-star fa-lg"></i><i class="fa fa-star-half-o fa-lg"></i><i class="fa fa-star-o fa-lg"></i><i class="fa fa-star-o fa-lg"></i><br>testuser1</div>
    <div id="wrapper">
		<img src="titelweiss.png" height="200px">
			
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Aufgaben</div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:toggle('stadt')">
                                <div class="panel-footer">
                                    <span class="pull-left">Meine Stadt</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
							<div class="panel-footer" id="stadt" style="display:none">
								<form>
								<?php 
								$pdo = new PDO('mysql:host=localhost;dbname=lifecity', 'root', '');
								$pdo->query("SET CHARACTER SET utf-8");
								$sql = 'SELECT description FROM tasks WHERE category="1"';
								$received = $pdo->query($sql);
								foreach($received as $row){
								echo '<input type="checkbox"> '.utf8_encode($row["description"]);
								echo '<br><br>';
								
								}
								
								
								
								?>
								
								</form>
								<div class="clearfix"></div>
                            </div>
							<a href="javascript:toggle('sozial')">
                                <div class="panel-footer">
                                    <span class="pull-left">Soziale Tätigkeiten</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
							<div class="panel-footer" id="sozial" style="display:none">
							<form>
								<?php 
								$pdo = new PDO('mysql:host=localhost;dbname=lifecity', 'root', '');
								$pdo->query("SET CHARACTER SET utf-8");
								$sql = 'SELECT description FROM tasks WHERE category="2"';
								$received = $pdo->query($sql);
								foreach($received as $row){
								echo '<input type="checkbox"> '.utf8_encode($row["description"]);
								echo '<br><br>';
								
								}
								
								
								
								?>
								</form>
								<div class="clearfix"></div>
                            </div>
							<a href="javascript:toggle('team')">
                                <div class="panel-footer">
                                    <span class="pull-left">Teamwork</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
							<div class="panel-footer" id="team" style="display:none">
							<form>
								<?php 
								$pdo = new PDO('mysql:host=localhost;dbname=lifecity', 'root', '');
								$pdo->query("SET CHARACTER SET utf-8");
								$sql = 'SELECT description FROM tasks WHERE category="3"';
								$received = $pdo->query($sql);
								foreach($received as $row){
								echo '<input type="checkbox"> '.utf8_encode($row["description"]);
								echo '<br><br>';
								
								}
								
								
								
								?>
								</form>
								<div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Gruppe</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Supergroup</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Bearbeitungsstand</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"><div id="chartContainer" style="height: 100px; width: 300px;"></div>
									<script type="text/javascript">
									window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer",
			{
				title:{
					text: "Bearbeitungsstand"
				},

				data: [
				{
					type: "bar",

					dataPoints: [
					{ x: 10, y: 90, label:"geschafft" },
					]
				}
				]
			});

			chart.render();
		}
									
									
									</script></span>
                                    <div class="clearfix" ></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
				<form><input type="button" id="button" value="erledigt" onclick=""></form>

</div>
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

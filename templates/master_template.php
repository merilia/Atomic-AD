<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_URL?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?=PROJECT_NAME?></title>

	<!-- Bootstrap core CSS -->
	<link href="assets/components/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<style>
		body {
			min-height: 2000px !important;
			padding-top: 70px;
		}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->


</head>

<body>
<div class="container">
    <div class="row">

    </div>
</div>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="col-md-6 col-md-offset-4">
        <div class="row">
		<div class="navbar-header">

			<a class="navbar-brand" href="#"><?=PROJECT_NAME?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Avaleht</a></li>
				<li><a href="#services">Teenused</a></li>
				<li><a href="#portfolio">Tehtud tööd</a></li>
				<li><a href="#contact">Kontakt</a></li>

			</ul>

		</div><!--/.nav-collapse -->
        </div>
	</div>
</div>

<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <?  @require "views/$controller/{$controller}_$action.php"; ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="assets/components/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>

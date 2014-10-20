<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
    <script src="assets/components/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <title><?= PROJECT_NAME ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/components/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
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
<div>
    <div class="container" style="max-width:1280px">


        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <div class="row">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Atomic AD OÜ</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Avaleht</a></li>
                                    <li><a href="#services">Teenused</a></li>
                                    <li><a href="#portfolio">Tehtud tööd</a></li>
                                    <li><a href="#contact">Kontakt</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
                <div class="row">
                    <!-- Main component for a primary marketing message or call to action -->
                    <? if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
                    <? @require "views/$controller/{$controller}_$action.php"; ?>
                </div>
                <div class="row">
                    <footer>
                            <div class="col-md-4">
                                <h1>Atomic AD</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor doloremque est laborum nam quo reiciendis rem, sint veniam voluptates!</p>
                            </div>
                            <div class="col-md-4">
                                <ul class="nav navbar-nav">
                                    <span class="active"><a href="#">Avaleht</a></span>
                                    <span><a href="#services">Teenused</a></span>
                                    <span><a href="#portfolio">Tehtud tööd</a></span>
                                    <span><a href="#contact">Kontakt</a></span>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <p class="help-block">Copyright blabla</p>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
    <!-- /container -->
</div>
</body>
</html>

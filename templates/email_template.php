<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">

    <div class="starter-template">
        <div class="col-md-6">
            <h1>Kliendi kiri</h1>

            <form role="form" method="post">
                <div class="form-group">
                    <label for="exampleInputName">Nimi</label>
                    <?= $data['email_name'] ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <?= $data['email_email'] ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputNumber">Telefoninumber</label>
                    <?= $data['email_phone'] ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Sõnum</label>
                    <?= $data['email_message'] ?>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

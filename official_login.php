<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!--<link rel="stylesheet" type="text/css" href="official_login.css">-->
    <style>
    body {
    background-image: url(bg.jpg);
    background-position: center; 
    background-size: cover;
}

body,
html {

    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
}

    </style>
</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Online Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="official_login.php">Admin Login</a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="container">
  <hr> <br><br> <br><br> <br><br> <br><br> <br><br>
        <div class="row text-center">

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>INCHARGE LOGIN</h3>
                        <p>
                            <a href="policelogin.php" class="btn btn-primary">Login</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>SUPERVISOR LOGIN</h3>
                        <p>
                            <a href="inchargelogin.php" class="btn btn-primary">Login</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>HQ LOGIN</h3>
                        <p>
                            <a href="headlogin.php" class="btn btn-primary">Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
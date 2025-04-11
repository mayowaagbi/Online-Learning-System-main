<?php
session_start();
include_once 'dbConnection.php';

if (!isset($_SESSION['email'])) {
    header("location:index.php");
    exit();
}

$email = $_SESSION['email'];
$name = $_SESSION['name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us | Online Learning System</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo">Adaptive Learning Platform</span>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <span class="pull-right top title1">
                <span class="log1">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Hello,
                </span>
                <a href="account.php?q=1" class="log log1"><?php echo htmlspecialchars($name); ?></a>&nbsp;|&nbsp;
                <a href="logout.php?q=account.php" class="log">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout
                </a>
            </span>
        </div>
    </div>
</div>

<div class="bg">
<nav class="navbar navbar-default title1">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="account.php?q=1"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li class="active"><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;About Us</a></li>
                <li class="pull-right"><a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Signout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body" style="padding: 40px;">
                    <h2 class="text-center" style="color: #660033; margin-bottom: 30px;">About Our Learning Platform</h2>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h3 style="color: rgb(36, 8, 199);"><span class="glyphicon glyphicon-education"></span> Our Mission</h3>
                            <p class="text-justify" style="font-size: 16px; line-height: 1.6;">
                                We are committed to revolutionizing the way students learn through adaptive technology. 
                                Our platform provides personalized learning experiences that adapt to each student's 
                                individual needs and learning pace.
                            </p>
                        </div>
                        
                        <div class="col-md-6">
                            <h3 style="color: rgb(36, 8, 199);"><span class="glyphicon glyphicon-star"></span> What We Offer</h3>
                            <ul class="list-group" style="margin-top: 20px;">
                                <li class="list-group-item">Adaptive quizzes that adjust to your skill level</li>
                                <li class="list-group-item">Comprehensive performance tracking</li>
                                <li class="list-group-item">Real-time ranking system</li>
                                <li class="list-group-item">Detailed progress reports</li>
                                <li class="list-group-item">Secure and personalized learning environment</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-12">
                            <h3 style="color: rgb(36, 8, 199);"><span class="glyphicon glyphicon-wrench"></span> Key Features</h3>
                            <div class="row">
                                <div class="col-md-4 feature-card">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4><span class="glyphicon glyphicon-dashboard"></span> Real-Time Analytics</h4>
                                            <p>Track your learning progress with detailed analytics and insights.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 feature-card">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4><span class="glyphicon glyphicon-refresh"></span> Adaptive Learning</h4>
                                            <p>Smart algorithms that adjust content based on your performance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 feature-card">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4><span class="glyphicon glyphicon-certificate"></span> Achievement System</h4>
                                            <p>Earn badges and rewards as you progress through courses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<<div class="row footer">
<div class="col-md-3 box">
<a href="about.php" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Teacher Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:blue">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		<img src="image/logo.png" width=100 height=100 alt="Rajat Garg" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="https://www.facebook.com/rajatg62" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">OLS</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+234 8146282883</h4>
    <h4 style="font-family:'typo' ">mayovibe1@gmail.com</h4>
    <h4 style="font-family:'typo' ">Babcock  University</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for Teacher login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:blue;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Teacher user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
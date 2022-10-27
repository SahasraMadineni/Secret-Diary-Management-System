<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Diary || Sorry,inavalid request.. </title>

 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link  rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
 <?php if((@$_GET['q1']==1) || @$_GET['eeid'])echo '<script src="ckeditor/ckeditor.js" type="text/javascript"></script>';?>
 <script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
</head>

<body>
<!--header start-->
<div class="row logo">
<div class="col-md-6">
<h1><span style="color:#FFCA82">My&nbsp;Diary</span>&nbsp;<span style="font-size:15px; color:#fff;">Soft copy of my feeling...</span></h1>

</div>
<div class="col-md-2">
</div><div class="col-md-4">
 <?php
  include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub btn sub1"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="index.php" class="pull-right sub btn sub1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--header end-->

<div class="row">
<div class="col-md-12">
<div class="bich">
<!--content area start-->
<div class="invalid">
<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Sorry,inavalid request..
</div>
<!--content area closed-->
</div>

</div>
</div><!--middle area closed-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="aboutus.php" target="_blank" >About us</a>
</div>
<div class="col-md-3 box">
<li data-toggle="modal" data-target="#login"><a href="#">Admin Login</a></li></div>
<div class="col-md-3 box">
<li data-toggle="modal" data-target="#developers"><a href="#">Developers</a></li>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-3">
		 <img src="img/STUDENT.jpg" width=100 height=100 alt="Sahasra" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/Sahasra Madineni" style="color:#202020; font-size:18px" title="Find on Facebook">Sahasra</a>
		<h4 style="color:#202020; font-size:16px">+919390603822</h4>
		<h4><a href="mailto:sahasra.madineni@gmail.com" style="color:#202020; font-size:16px">sahasra.madineni@gmail.com</a>
		</h4></div><div class="col-md-4">
		</div></div>
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-5">
		<a href="https://www.facebook.com/Arshiya" style="color:#202020; font-size:18px"  title="Find on Facebook">Arshiya</a>
		<h4 style="color:#202020">+919010442464</h4>
		<h4><a href="mailto:arshu.shaik00@gmail.com" style="color:#202020; font-size:16px">arshu.shaik00@gmail.com</a></h4>
		</div>
		<div class="col-md-3">
		<img src="img/STUDENT.jpg" width="100" height="100" alt="Arshiya"  class="img-rounded">
		</div>
		<div class="col-md-3">
		 <img src="img/boypic.jpeg" width=100 height=100 alt="Sahasra" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/Sahasra Madineni" style="color:#202020; font-size:18px" title="Find on Facebook">Kishore</a>
		<h4 style="color:#202020; font-size:16px">+918919270706</h4>
		<h4><a href="mailto:kishorec5916@gmail.com" style="color:#202020; font-size:16px">kishorec5916@gmail.com</a>
		</h4></div><div class="col-md-4">
		</div></div>
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-5">
		<a href="https://www.facebook.com/Arshiya" style="color:#202020; font-size:18px"  title="Find on Facebook">Pavan</a>
		<h4 style="color:#202020">+916309391235</h4>
		<h4><a href="mailto:pavan.sanmala@gmail.com" style="color:#202020; font-size:16px">pavan.sanmala@gmail.com</a></h4>
		</div>
		<div class="col-md-3">
		<img src="img/boypic.jpeg" width="100" height="100" alt="Arshiya"  class="img-rounded">
		</div>
	 </div></p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange">LOGIN</span></h4>
      </div>
      <div class="modal-body">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=account.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
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
<!--footer end-->

</body>
</html>
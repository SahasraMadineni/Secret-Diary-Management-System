<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Diary||About Us</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 
 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="js/bootstrap.js" type="text/javascript"></script>
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
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=aboutus.php" class="pull-right sub btn sub1"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
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

<div class="bg">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(img/bg1.jpg)">
<h2 align="center" style="font-family:Times New Roman; color:#000066">ABOUT US.....</h2>
<div style="font-size:14px">
<p style="font-family:Times New Roman; font-size:18px"><b>My Diary</b> is an app for anyone,who wants to keep a personal online diary, and is designed to be fast and easy to use.<br />
There are many types of diaries and many choose to share different things. The usual definition is that a diary is a dated record of what's happened in the past. 
Having it in online provides many improvements to the old hand-written type.
<ol type="1" style="font-family:Times New Roman;font-size:18px">
<li>It's more secure, since it requires login credentials to use. No longer will siblings, parents or spouses snoop in private diaries.</li>
<li>It has functions for backups, to prevent loss.</li>
<li>It can be accessed from anywhere and anytime.</li>
<li>You can use the browsers spell check to get rid of pesky spelling errors.</li>
</ol></p>
<b style="font-family:Italic; font-size:18px">Why it is the Best for keeping your private data in online???</b>
<p><ol style="font-family:Times New Roman; font-size:18px">
<li>It is the most secure website for keeping your notes online since we have considered your privacy as our main priority.</li>
<li>It has been made very user-friendly so that any user can keep their notes and feelings at one place in a well-organised manner.</li>

</ol></p>
<p style="font-family:Times New Roman;font-size:18px"><b style="font-family:Italic; font-size:18px"><u>For further queries you can contact us at:</u></b><br /></br>
&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"> sahasra.madineni@gmail.com</span>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"> arshu.shaik00@gmail.com</span>&nbsp;&nbsp;&nbsp;</br>
&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"> kishorekishorentr@gmail.com</span>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"> pavan.sanmala123@gmail.com</span>&nbsp;&nbsp;&nbsp;
</p>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div></div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="aboutus.php" target="_blank">About us</a>
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
<form role="form" method="post" action="admin.php?q=aboutus.php">
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

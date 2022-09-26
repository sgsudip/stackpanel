<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
    <link rel="stylesheet" href="navelogo.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=8765606090&text=How can we help you." class="float">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <style>
  
  blockquote {
  padding: 20px;
  box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}
.p2 {
    font-family: 'Work Sans';
}
.p1{
	font-family: Angeline;
}



</style>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img  src="logo/logo.png" class='na-logo' /></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Dashboard</a></li>
      <li class="active"><a href="download.php">Downloads</a></li>
      <li class="active"><a href="credits.php">Credits</a></li>
      <li class="active"><a href="transaction.php">Transactions</a></li>
	  <li class="active"><a href="contact1.php">Contact Us</a></li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
</ul>
</br>
	<ul class="nav navbar-nav navbar-right">
      <li><submit id = "bt" ></span>Add Balance (&#8377 0.00)</submit></li>

</ul>

  </div>
</nav>
   <blockquote>
<div class="container">
   
    <h3> <p class="p1">  <b>Transactions</b></p></h3>

  <p class="p2">No Transactions at this page</p>
  
  </div>
   </blockquote>
   <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
#bt{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 0%;  
}  

    </style>	
</body>
</html>

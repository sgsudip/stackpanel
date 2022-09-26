<?php
session_start();
?>
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=8765606090&text=How can we help you." class="float">
<i class="fa fa-whatsapp my-float"></i>

<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="navelogo.css">

</a>
  <style>
  
  blockquote {
  padding: 20px;
  box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}
body {
    font-family: 'Work Sans';
}

font-face {
    font-family: 'Visby Round CF';
    src: local('Visby Round CF Demi Bold Oblique'), local('Visby-Round-CF-Demi-Bold-Oblique'),
        url('VisbyRoundCF-DemiBoldOblique.woff2') format('woff2'),
        url('VisbyRoundCF-DemiBoldOblique.woff') format('woff'),
        url('VisbyRoundCF-DemiBoldOblique.ttf') format('truetype');
    font-weight: 600;
    font-style: normal;
  }

</style>

</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a class="navbar-brand" href="welcome.php"><img  src="logo/logo.png" class='na-logo' /></a></li>
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

  
  <h3> <p id="font-face">  <b>Dashboard</b></p></h3>

  <p>Attention!
<br>
Added new websites and decreased the price of some stock websites.
</p>
</div>
<div class="container">
<p>Download Paid Stock </p><br>
<p>Copy and paste the URL to the asset you want to download.</p>


<p>STOCK URL</p>
<center>
  <form action="welcome.php" method="post">
<p> <input  name="myURL" type="url" 
       placeholder="https://www.shutterstock.com/image-photo/silhouetted-loving-couple-sunset-1774166057" require> </p>

<button type="submit" id="btn">
Download
</button>
</form>
</center>
</div>
<?php


$name=$_SESSION["username"];

?>
<h1> <?php echo $name; ?> </h1>
<hr>
<center>

  <h3> <p id="font-face">  <b>Services Cost</b></p></h3>



</center>
<div class="container">
<p> <h2><b style='color:blue'>Per Image/File Prices:</b></h2></p>
<ul style='list-style:none;' class='list-style'>
<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/shutterstock.png' class='logo'width='40' height='auto' /> Shutterstock-<b style='color:blue'>&#8377 40.00</b>.

</p></li>

<li Style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/AdobeStock.png' class='logo'width='40' height='auto'/> Adobestock-<b style='color:blue'>&#8377 40.00</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/Dreamstime.png' class='logo'width='40' height='auto'/> Dreamstime-<b style='color:blue'>&#8377 50.00</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/Depositphotos_logo.jpg' class='logo'width='40' height='auto'/> Depositephotos-<b style='color:blue'>&#8377 50.00</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/IStock_corporate_logo.svg.png' class='logo'width='40' height='auto'/> Istockphoto-<b style='color:blue'>&#8377 60</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/Freepik .png' class='logo'width='40' height='auto'/> Freepik-<b style='color:blue'>&#8377 20</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/EnvatoElements.png' class='logo'width='40' height='auto'/> Envato Element-<b style='color:blue'>&#8377 20</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/vecteezy.png' class='logo'width='40' height='auto'/> Vecteezy-<b style='color:blue'>&#8377 40</b></p></li>

<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/123RF_Logo.png' class='logo'width='40' height='auto'/> 123rf-<b style='color:blue'>&#8377 45</b></p></li>
</ul>
</div>


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

#btn{  
    color: #ffffff;  
    background: #008000;  
    padding: 7px;  
    margin-left: 0%;  
}  

#bt{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 0%;  
}  


    </style>	
>

</blockquote>


</body>
</html>

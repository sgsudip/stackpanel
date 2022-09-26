<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stackpanel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=8765606090&text=How can we help you." class="float">
<i class="fa fa-whatsapp my-float"></i>
<link rel="stylesheet" href="css/logo.css">
<link rel="stylesheet" href="css/welcome.css">

</a>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="collpse navbar-collapse">
    <ul class="nav navbar-nav">
      <li>
        <a class="navbar-brand" href="Dashboard.php">
            <img  src="logo/logo.png" class='na-logo' />
        </a>
    </li>
    <li class="active">
        <a href="Dashboard.php">
            Dashboard
        </a>
    </li>
    <li class="active">
        <a href="download.php">
            Downloads
        </a>
    </li>
    <li class="active">
        <a href="credits.php">
            Credits
        </a>
    </li>
    <li class="active">
        <a href="transaction.php">
            Transactions
        </a>
    </li>
	<li class="active">
        <a href="contact1.php">
            Contact Us
        </a>
    </li>
      <li>
        <a href="logout.php">
            <span class="glyphicon glyphicon-user">
            </span>
            Logout
        </a>
    </li>
      <li>
      <submit id="bt"></span>Wallet balance(&#8377 <?php 
                    require_once "conn.php";

                    $uname = $_POST['user'];
                    $result = mysqli_query($conn,"select balance from user where username = '$uname'");

                    $row = $result -> fetch_row();

                     if($result){
                        echo $row[0];
                     }else{ 
                       echo 0;
                     } 
                    
                    ?>)</submit>
      </li>
                    </ul>

    </div> 
</nav>
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
 <input  name="myURL" type="url" style='width: 800px; height: 60px;'
       placeholder="https://www.shutterstock.com/image-photo/silhouetted-loving-couple-sunset-1774166057" required /> 
       <input type="submit" class='payBTN' title="Log In" name="search" value="search"></input>
</form>
</center>
</div>

<div id="showbox" style='display:none' class='paybox'>
<button onClick='closebox()' class='close'>X</button>
<br/><br/><br/>
<p><b>You can use wallet to pay the <br> amount</b> <br>
Your wallet balance is: &#8377 3375
<br>

<button type="submit" class='payBTN' onClick='reloadpage()'>
Pay & Download
</button>

<p><b>Pay via online method.</b><br>
Debit card, Credit card, Net <br> banking and other available <br> methods
<br>
<button id="rzp-button1" class='payBTN'>
Pay & Download
</p>
</div>



<?php 
if (isset($_POST['search']))
{
$url=$_POST['myURL'];

$result=file_get_contents("https://vip.neh.tw/api/stockinfo/%7Bsite%7D/%7Bid%7D?apikey=NQgwMaWl7sLG5CEwr1S4tsUa4FkWKi&url=$url");
$arr=json_decode($result,true);
echo '<pre>';
if($arr['success']){
$image=$arr['data']['image'];
$title=$arr['data']['title'];
$id=$arr['data']['id'];


$source=$arr['data']['source'];
$site=$arr['data']['source'];
$res=file_get_contents("https://vip.neh.tw/api/stockorder/$source/$id?apikey=NQgwMaWl7sLG5CEwr1S4tsUa4FkWKi&url=$url");
$arra=json_decode($res,true);
$task_id=$arra['task_id'];
}
elseif ($arr['error']) {
$error= $arr['data'];
echo "<script>alert('$message');</script>";
}
else{
  $image="logo/empty.JPG";
$title='Title';
$id='Id';
$task_id='0';
$source='no_sorce';
$site='no_site';
}
?>
  
<?php
if($source=="123rf"){
$price="45";
}
elseif($source=="adobestock" || $source="vecteezy" || $source=="shutterstock" ){
  $price="40";
}
elseif($source=="dreamstime"){
  $price="50";
}
elseif($source=="envato element" || $source=="freepik"){
  $price="20";
}
elseif($source=="Istockphoto"){
  $price="60";
}
else{
  $price="0";
}
}
else{
  $image="https://images.app.goo.gl/b4auSGvuWhEsQRyG6";
$title="title";
$id="0";
$price="0";
}

?>
<table style='text-align:center; font-size:22px; padding-right:20px;'>
 <tr ><th>Image</th><th>Id</th><th>Price</th><th>Source</th><th>Download</th></tr>
 <tr ><td><img src='<?php echo $image; ?>' width='200px' /> </td><td><?php echo $id; ?></td><td><?php echo $price; ?>₹</td><td><?php echo $site; ?></td>
<td><button onClick='mybox()' id="confirm">Confirm Order</button></td></tr>
</table>
<div style="display:none" class="paybox" id="download-now">


<p><button onClick='closeboxd()' class='close'>X</button></p>
<h4>Now you are able to download </h4>
<p>Id</p>
<div class='loader' id='loder' style='display:none;'></div>

  <tr><td><button class='payBTN'><a href='<?php echo $downloadLink; ?>'>Download Now</a></button></td></tr></div>
<div>

<hr>
<center>

  <h3><p id="font-face">  <b>Services Cost</b></p></h3>



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
    </style>	
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script src='js/jquery-3.6.1.min.js'>
</script>
  <script>
    function reloadpage(){
     download();
    }

function mybox(){

  document.getElementById('showbox').style.display='block'
 
}
function closebox(){
  document.getElementById('showbox').style.display='none'
}

function download(){
  document.getElementById('download-now').style.display='block'
  
  <?php
   $ress=file_get_contents("https://vip.neh.tw/api/v2/order/$task_id/download?apikey=NQgwMaWl7sLG5CEwr1S4tsUa4FkWKi&responsetype=any&idn={yourwebhook}");
$array=json_decode($ress,true);

$success=$array['success'];

if ($success<1) {

?>

document.getElementById('loder').style.display='block'
<?php } 
$downloadLink=$array['downloadLink'];

?>
  
  
}
function closeboxd(){
  document.getElementById('download-now').style.display='none'
}



var options = {
    "key": "rzp_live_2vzROYhVbrWTyN", // Enter the Key ID generated from the Dashboard
    "amount": <?php echo $price; ?>*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Image market",
    "description": "Pay for Download file",
    "image": "logo.png",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    },
    "handler":function(response){
alert(response.razorpay_payment_id);
      document.getElementById('PaymentId')
        console.log(response);

        download();
    },
    
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault(); 
}
</script>
</body>
</html>

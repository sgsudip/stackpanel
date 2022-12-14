<html lang="en">
<head>
  <title>Stackpanel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery minified 3.6.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- google fonts -->
  <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- whatsapp api -->
  <!-- <a href="https://api.whatsapp.com/send?phone=8765606090&text=How can we help you." class="float">
  <i class="fa fa-whatsapp my-float"></i>
  </a> -->
  <link rel="stylesheet" href="css/navelogo.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" href="css/welcome.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>

<!-- navbar section using bootstrap -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand">
        <a class="navbar-brand" href="dashboard.php">
    ImageMarket
        </a>
        </span>
<button id="toggle-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse" >
    <div class="nav me-auto navbar-nav">
    <a class="nav-link" href="dashboard.php">
            Dashboard
        </a>
 
        <a class="nav-link" href="download.php">
            Downloads
        </a>
  
        <a class="nav-link" href="credits.php">
            Credits
        </a>
   
        <a class="nav-link"  href="transaction.php">
            Transactions
        </a>
  
        <a class="nav-link" href="contact1.php">
            Contact Us
        </a>
  
        <a class="nav-link" href="logout.php">
            <span class="glyphicon glyphicon-user">
            </span>
            Logout
        </a>
   
      <span id="bt">
      Wallet balance(&#8377 <?php 
                    require_once "conn.php";

                    $uname = $_POST['user'];
                    $result = mysqli_query($conn,"select balance from user where username = '$uname'");

                    $row = $result -> fetch_row();

                     if($result){
                        echo $row[0];
                     }else{ 
                       echo 0;
                     } 
                    
                    ?>)
      </span>
    </div>
</div> 
</div>

</nav>

<!-- first container -->
<div class="first-section container">
  <h3>
    <p id="font-face">
      <b>Dashboard</b>
    </p>
  </h3>
  <p>Attention! Added new websites and decreased the price of some stock websites.
  </p>
</div>
<!-- container div ends here -->
<!-- second container -->
<div class="second-section container">
<p>Download Paid Stock </p><br>
<p>Copy and paste the URL to the asset you want to download.</p>
<p>STOCK URL</p>

  <form action="welcome.php" method="post" class="stock-url-form">
    <div class="form-group">
    <label for="stock-url-input">URL</label>
    <input class="form-control stock-url-input" id="stock-url-input" name="myURL" type="url"  placeholder="Enter url here" required />
    </div>
 
    <div class="form-group">
    <input type="submit" class='search-btn form-control btn btn-primary' title="Log In" name="search" value="search">
    </input>
    </div>
  </form>
</div>

<!-- show box -->
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
$image;
$title="title";
$id="0";
$price="0";
}

?>
<img class="selected-image" src='<?php
$placeholderimg = "assets/images/placeholder.png";

if(isset($image)){
    echo $image;
} else{
    echo $placeholderimg;
}
?>' /> 
<!-- table start -->
<table class="table table-bordered table-responsive" style='text-align:center;'>
  <tr>
    <th>Id</th>
    <th>Price</th>
    <th>Source</th>
    <th>Download</th>
  </tr>
  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $price; ?>???</td>
    <td><?php if(isset($site)){
        echo $site;
     }else{
        echo "No source available";
     } ?></td>
    <td><button onClick='mybox()' id="confirm">Confirm Order</button></td>
  </tr>
</table>
<!-- table end -->


<div class="paybox" id="download-now">
<p>
    <button onClick='closeboxd()' class='close'>X</button>
</p>
<h4>Now you are able to download.</h4>
<p>Id</p>
<div class='loader' id='loader' style='display:none;'></div>

  <tr><td><button class='payBTN'><a href='<?php echo $downloadLink; ?>'>Download Now</a></button></td></tr>
</div>
<div class="heading-container">
  <h3>
    <p id="font-face " class="services-cost-heading">
      <b>Services Cost</b>
    </p>
  </h3>
</div>
  <!-- container start -->
<div class="third-section container">
<p> 
<h2>
<b style='color:blue'>Per Image/File Prices:</b>
</h2>
</p>
<!-- list of brands -->
<ul style='list-style:none;' class='list-style'>
<li style='padding:15px'><p><b Style='padding:20px'>&#62</b> <img src='logo/shutterstock.png' class='logo'width='40' height='auto' /> Shutterstock- <b style='color:blue'>&#8377 40.00</b>.

</p>
</li>

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
<!-- container end -->
<!-- razorpay javascript -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- jquery -->
<!-- <script src='js/jquery-3.6.1.min.js'>
</script> -->

<script>
    if(document.getElementById("toggle-button")){
        document.getElementsByClassName("navbar-toggler-icon")[0].addEventListener("click",(e)=>{
          console.log(e.target.parentElement.parentElement.children[2]);
          if(e.target.parentElement.parentElement.children[2].classList.contains("collapse")){
            e.target.parentElement.parentElement.children[2].classList.add("show");
            e.target.parentElement.parentElement.children[2].classList.remove("collapse");
          }else{
            e.target.parentElement.parentElement.children[2].classList.add("collapse");
            e.target.parentElement.parentElement.children[2].classList.remove("show");
          }
          console.log(e.target.parentElement.parentElement.children[2].classList);
          
        })
    }else{
        console.log("no");
    }

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
  $ress;
  $array;
  $success;

  if(isset($task_id)){
    $ress=file_get_contents("https://vip.neh.tw/api/v2/order/$task_id/download?apikey=NQgwMaWl7sLG5CEwr1S4tsUa4FkWKi&responsetype=any&idn={yourwebhook}");
    $array=json_decode($ress,true);
    $success=$array['success'];
  }

  if(isset($success)){
    if ($success<1) {
        ?>
        document.getElementById('loader').style.display='block'
        <?php } 
        $downloadLink;
        if(isset($array)){
            $downloadLink=$array['downloadLink'];
        }    
  }
?>
}
// download function end

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

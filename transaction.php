<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stackpanel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=8765606090&text=How can we help you." class="float">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
  <link rel="stylesheet" href="css/navelogo.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/transaction.css">
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
                    // user name
                    $uname;
                    // query result
                    $result;

                    if(isset($_POST) && in_array('user',$_POST)){
                    $uname = $_POST['user'];
                    $result = mysqli_query($conn,"select balance from user where username = '$uname'");
                    $row = $result -> fetch_row();

                    if(isset($row)){
                        echo $row[0];
                     }else{ 
                       echo 0;
                     } 
                    }else{
                        echo 0;
                    }
                    ?>)
      </span>
    </div>
</div> 
</div>
</nav>
<blockquote>
<div class="container">
    <h3> 
      <p class="p1">
        <b>Transactions</b>
      </p>
    </h3>
    <p class="p2">No Transactions at this page</p>
</div>
</blockquote>
<script src="js/navbar.js">
</script>   	
</body>
</html>

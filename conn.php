<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "stack";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
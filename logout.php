<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('location:/stackpanel/home.php');
exit();
?>
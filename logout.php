<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('location:/stackpanel-three/home.php');
exit();
?>
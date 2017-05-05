<?php session_start();

unset($_SESSION["user_id"]);
unset($_SESSION["user_firstname"]);
//unset($_SESSION["user_forgot_id"]);

header("location:index.php");

?>
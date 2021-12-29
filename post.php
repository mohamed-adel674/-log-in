<?php

if(isset($_POST['username']) || isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
}

if(empty($_POST['username'])){
   $error_username = 'enter username !';
}
if(empty($_POST['password'])){
   $error_password = 'enter password !';
}

else{
   header('location : index.php'); 
}
include('index.php');

?>
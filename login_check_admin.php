<?php

function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lograil";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$uname=$_GET['uname'];
$password=$_GET['password'];

if($uname=='admin'&&$password=='admin'){
    redirect("admin_dashboard.php");
}
else{
    redirect("login.php");
}
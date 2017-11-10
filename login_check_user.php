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

$sql="SELECT * FROM `user_table` WHERE `EmailID`='$uname';";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

    echo $row;
    if ($row['Password'] == $password) {
        redirect("user_dashboard.php?user=$uname");
    } else {
        $pass = $row['Password'];
        redirect("login.php?msg=$password&pass=$pass");
    }
?>
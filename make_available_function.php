<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 3:20 AM
 */
function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lograil";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$day=$_GET['day'];
$id=$_GET['id'];
$sql="INSERT INTO `days_available` (`Train_ID`, `Available_days`) VALUES ('$id', '$day');";

$result=$conn->query($sql);

?>
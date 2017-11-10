<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 5:30 AM
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

$id=$_GET['station_id'];
$name=$_GET['station_name'];

$sql="INSERT INTO `station` (`Station_ID`, `Station_Name`) VALUES ('$id', '$name');";

$result=$conn->query($sql);

redirect("add_station.php?msg=Success!");
?>
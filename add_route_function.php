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

$id=$_GET['train_id'];
$stop=$_GET['stop_no'];
$station=$_GET['station_id'];
$arrival=$_GET['arrival'];
$departure=$_GET['departure'];
$distance=$_GET['distance'];

$sql="INSERT INTO `route` (`Train_ID`, `Stop_number`, `Station_ID`, `Arrival_time`, `Departure_time`, `Source_distance`) VALUES ('$id', '$stop', '$station', '$arrival', '$departure', '$distance');";

$result=$conn->query($sql);

redirect("add_route.php?msg=Success!");
?>
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

$pnr=$_GET['pnr'];
$sql="DELETE FROM `passenger` WHERE `passenger`.`PNR` = '$pnr';";

$result=$conn->query($sql);
redirect("check_pnr.php?msg=Cancelled");
?>
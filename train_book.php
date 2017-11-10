<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 3:16 AM
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

$train_id=$_GET['train_id'];
$date=$_GET['date'];
$source=$_GET['s'];
$dest=$_GET['d'];
$fulldate=$_GET['fulldate'];

$pnr=mt_rand(10000,99999);
$age=mt_rand(0,60);
$name=$_GET['fullname'];

$sql="SELECT * FROM `train_status` WHERE `Available_Date`='$date';";

$book="UPDATE `train_status` SET `Booked_seats3` = `Booked_seats3`+1 WHERE `train_status`.`Train_ID` = $train_id AND `train_status`.`Available_Date` = '$date';";


$generate_pnr="INSERT INTO `passenger` (`PNR`, `Seat_number`, `Passenger_name`, `Age`, `Gender`, `Train_ID`) VALUES ('$pnr', '$age', '$name', '21', 'male', '12485');";

$result=$conn->query($book);
$pnr_insert=$conn->query($generate_pnr);
$msg="PNR:".$pnr;
redirect("../train_status_check.php?source=".$source."&destination=".$dest."&fulldate=".$fulldate."&booked=booked&msg=".$msg.'');

?>
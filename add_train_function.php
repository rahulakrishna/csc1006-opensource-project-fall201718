<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 5:20 AM
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
$name=$_GET['train_name'];
$type=$_GET['train_type'];
$source=$_GET['source'];
$dest=$_GET['dest'];

$source_id='';
$dest_id='';

$source_id_sql="SELECT * FROM `station` WHERE `Station_Name`='$source'";
$dest_id_sql="SELECT * FROM `station` WHERE `Station_Name`='$dest'";

$source_result=$conn->query($source_id_sql);
$dest_result=$conn->query($dest_id_sql);

if($source_result->num_rows>0) {
    while ($row = $source_result->fetch_assoc()) {
    	$source_id=$row['Station_ID'];
    }
}

if($dest_result->num_rows>0) {
    while ($row = $dest_result->fetch_assoc()) {
    	$dest_id=$row['Station_ID'];
    }
}


$sql="INSERT INTO `train` (`Train_ID`, `Train_name`, `Train_type`, `Source_stn`, `Destination_stn`, `Source_ID`, `Destination_ID`) VALUES ('$id', '$name', '$type', '$source', '$dest', '$source_id', '$dest_id ');";

$result=$conn->query($sql);

echo $id.$name.$type.$source.$dest;

echo mysqli_connect_error();

//redirect("add_train.php?msg=Success!");
?>
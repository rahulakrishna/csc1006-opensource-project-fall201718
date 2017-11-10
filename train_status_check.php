<!DOCTYPE html>
<html>
<head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>

<body>
<!-- Dropdown Structure -->
<nav>
    <div class="nav-wrapper blue">
        <a href="#!" class="brand-logo">BookMyTicket</a>
        <!-- activate side-bav in mobile view -->
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

            <!-- Dropdown Trigger -->
        </ul>
        <!-- navbar for mobile -->
        <ul class="side-nav" id="mobile-demo">

        </ul>
    </div>
</nav>

<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 3:20 AM
 */
    $source=$_GET['source'];
    $dest=$_GET['destination'];
    $date=$_GET['date'];
    $month=$_GET['month'];
    $year=$_GET['year'];
    $booked=$_GET['booked'];
    $fulldate=$year.$month.$date;
    if($_GET['fulldate']){
        $fulldate=$_GET['fulldate'];
    }

function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lograil";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="SELECT * FROM `train` WHERE `Source_stn`='$source' AND `Destination_stn`='$dest'";
$result=$conn->query($sql);

$status="SELECT * FROM `train_status` WHERE `Available_Date`='$fulldate';";
$status_result=$conn->query($status);

$name=$_GET['full_name'];
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h4><div class='row'>";
        echo "<div class='col s4 light-green'>".$row['Train_ID']."</div>";
        echo "<div class='col s4 light-blue'>".$row['Train_name']."</div>";
        if(!($booked)) {
            echo '<div class=\'col s4 light-green\'><a href="train_book.php/?train_id=' . $row['Train_ID'] . '&date=' . $fulldate . '&s=' . $source . '&d=' . $dest . '&fulldate=' . $fulldate . '&fullname='.$name.'">Book Now</a>';
        }
        else{
            echo "<div class=\'col s4 light-green\'>Booked successfully</div>";
        }
        echo "</div>";
    }
}

echo "<br><br><h5 class='center'>Status:</h5><br>";
?>
<div class="row">
    <div class="col s8 push-s2 card">
        <div class="card-content center">
            <h3>
<?php
if($status_result->num_rows>0){
    while ($row=$status_result->fetch_assoc()){
        echo "<br>Booked Seats:".$row['Booked_seats3']." ";
        echo "out of ".$row['Available_seats3']."";
    }
}

echo "<br>".$_GET['msg'];
echo "</h3>";
echo "<br><a href='check_pnr.php' class='btn col s4 push-s4'>Check PNR</a><br><br>";
?>
</div></div></div>

</body>
</html>
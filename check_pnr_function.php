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
$sql="SELECT * FROM `passenger` WHERE `PNR`=$pnr;";

$result=$conn->query($sql);


?>

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
<div class="container">
    <div class="row">
        <div class="col s8 push-s2 card">
            <div class="card-content">

                <?php
                if($result->num_rows>0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "PNR:".$row['PNR']." Seat:".$row['Seat_number']." Name: ".$row['Passenger_name']."<br/>";
                        $msg="PNR:".$row['PNR']." Seat:".$row['Seat_number']." Name: ".$row['Passenger_name']."<br/>";

                        redirect("check_pnr.php?msg=$msg"."&pnr=".$pnr);
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
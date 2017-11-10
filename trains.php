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

    $sql="SELECT * FROM `train`;";

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
        <h1>Trains</h1>
        <?php
        if($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['Train_name']."(".$row['Train_type'].")   <a href=\"make_available.php?id=".$row['Train_ID']."\">Make Available</a><br/>";
            }
        }

        ?>

    </div>
</div>
</body>
</html>
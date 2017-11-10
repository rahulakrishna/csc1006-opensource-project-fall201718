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
    $id=$_GET['id'];

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
        <form action="make_available_function.php">
            Use format YYYYDDMM
            <input type="text" name="day" placeholder="Date here">
            <input type="hidden" name="id" value=<?php echo $id;?>>
        </form>
    </div>
</div>
</body>
</html>
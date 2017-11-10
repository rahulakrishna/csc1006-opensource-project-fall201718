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
    <br>
        <h3 class="center">Admin Dashboard</h3>
        <a href="add_train.php" class="col s12 btn">Add Train</a><br><br>
        <a href="add_station.php" class="col s12 btn">Add Station</a><br><br>
        <a href="add_route.php" class="col s12 btn">Add Route</a><br><br>
        <a href="trains.php" class="col s12 btn">Trains</a>
    </div> 
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bower_components/materialize/dist/js/materialize.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</body>
</html>
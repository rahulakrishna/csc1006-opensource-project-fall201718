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
        <h2 class="center">Train Status</h2>
        <form action="train_status_check.php">
            Full Name:<input type="text" name="full_name" placeholder="Full Name" class="col s12"><br>
            Source:<input type="text" name="source"><br>
            Destination:<input type="text" name="destination"><br>
            Date:<br><input name="date" class="col s4" placeholder="date"><input name="month" class="col s4" placeholder="month"> <input name="year" class="col s4" placeholder="year">
            <input type="submit" class="col s12 btn">
        </form>
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
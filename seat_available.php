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
        <form class="col s8 push-s2 center card" action="signu_check.php">
            <h3>Sign Up</h3>
            <input type="text" name="email" class="col s8 push-s2" placeholder="Email">
            <input type="password" name="password" class="col s8 push-s2" placeholder="Password">
            <input type="password" name="confirm_password" class="col s8 push-s2" placeholder="Confirm Password">
            <input type="text" name="full_name" class="col s8 push-s2" placeholder="Full Name">
            <div class="col s12"></div>
            <select class="col s4 push-s4">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <div class="col s12"></div>
            <input type="submit" name="submit" class="btn col s8 push-s2">
            <br><br><br>
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
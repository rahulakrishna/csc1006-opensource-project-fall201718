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
        <a href="#!" class="brand-logo">BookMyTrain</a>
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
            <form class="row" id="login" method="get">
                <input type="text" name="uname" class="col s8 push-s2" placeholder="Username">
                <br><br>
                <input type="password" name="password" class="col s8 push-s2" placeholder="Password">
                <br><br>
                <div class="col s12 center">
                    <p class="center">
                        <input type="radio" id="user_checked" name="radiosearch" onclick="document.getElementById('login').action='login_check_user.php';"/>
                        <label for="user_checked">User</label>
                    </p>
                    <p class="center">
                        <input id="admin_checked" type="radio" name="radiosearch" onclick="document.getElementById('login').action='login_check_admin.php';"/>
                        <label for="admin_checked">Admin</label>
                    </p>
                </div>
                <input type="submit" class="btn col s8 push-s2">
            </form>
        </div>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bower_components/materialize/dist/js/materialize.js"></script>
</body>
</html>
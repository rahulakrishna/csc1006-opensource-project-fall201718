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
        <form class="col s8 push-s2 center card" action="add_train_function.php">
            <div class="card-content">
            <div class="row">
                <input type="text" name="train_id" placeholder="Train ID" class="col s12">
                <input type="text" name="train_name" placeholder="Name" class="col s12">
                <input type="text" name="train_type" placeholder="Type" class="col s12">
                <input type="text" name="source" placeholder="Source" class="col s6">
                <input type="text" name="dest" placeholder="Destination" class="col s6">

                <input type="submit" class="col s12 btn">
                <div class="col s12"><?php echo $_GET['msg']; ?></div>
            </div>
            </div>
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
<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
}
?>





<html>
<head></head>
<body>
    <?php echo "controller = ".$controller.", action = ".$action ;?>
    <br>
    <br>
    [<a href="?controller=pages&action=home"> HOME </a>]
<<<<<<< HEAD
    [<a href="?controller=hospital&action=index"> HOSPITAL </a>]
=======
    [<a href="?controller=pages&action=home"> MAX_PER_DAY </a>]

>>>>>>> 13ec618823579c3b58a2eca932f84b39a374dd36
    <br> 
    <?php require_once("routes.php");?>
</body>
</html>
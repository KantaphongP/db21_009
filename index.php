<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'] ;
    $action = $_GET['action'] ;
}else{
    $controller = 'pages' ;
    $action = 'home' ; 
}?>
<html>
<head></head>
<body>
<<<<<<< HEAD
    controller = pages , action = home 
    <br>[<a href="/school">Home</a>]<br>
    <p> Welcome to our Homepage </p>
=======
    <?php echo "controller = ".$controller.",action=".$action;?>
    <br>[<a href = "">Home</a>]<br>
    <?php require_once("routes.php");?>
>>>>>>> e2c785f9780e3a8d94b2359bbbb2ded438d7024c
</body>
</html>

    

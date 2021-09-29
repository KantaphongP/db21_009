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
    controller = pages , action = home 
    <br>[<a href="http://158.108.207.4/db21/db21_009/?controller=pages&action=home">Home</a>]
    [<a href="http://158.108.207.4/db21/db21_009/?controller=order&action=index">order</a>]
    <br>
    <p> Welcome to  Homepage </p>
</body>
</html>

    

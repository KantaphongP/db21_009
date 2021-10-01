<?php
$controllers = array('pages'=>['home','error'],'order' =>['index'],'price_detail' =>['index']) ; 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "order" : require_once("./models/order.php") ; $controller = new OrderController(); break ;

        case "price_detail" : require_once("./models/price_detail.php") ; $controller = new PriceDetailController(); break ;
    }
    $controller->{$action}(); 
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action) ;
    }else{
        call('page','error') ;
    }
}else
{    call('page','error') ;}
?>
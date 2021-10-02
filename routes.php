<?php
$controllers = array('pages'=>['home','error'],'quotation' =>['index'],'quotationdetail' =>['index','newQuotationDetail'],'pricedetail' =>['index','newPriceDetail','addPriceDetial']) ; 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "quotation" : require_once("./models/quotation.php") ; $controller = new QuotationController(); break ;

        case "quotationdetail" : require_once("./models/quotationdetail.php") ; 
                                 require_once("./models/quotation.php"); 
                                 require_once("./models/product.php"); 
                                 require_once("./models/productcolor.php"); 
                                 $controller = new QuotationDetailController(); break ;

        case "pricedetail" : require_once("./models/pricedetail.php"); 
                             require_once("./models/product.php"); 
                             $controller = new PriceDetailController(); break ;
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
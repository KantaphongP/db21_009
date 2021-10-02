<?php
$controllers = array('pages'=>['home','error'],'quotation' =>['index','newQuotation'],'quotationdetail' =>['index'],'pricedetail' =>['index','newPriceDetail']) ; 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "quotation" : require_once("./models/quotation.php") ; $controller = new QuotationController(); break ;

        case "quotationdetail" : require_once("./models/quotationdetail.php"); require_once("./models/staff.php"); require_once("./models/customer.php"); require_once("./models/paymentterms.php") $controller = new QuotationDetailController(); break ;

        case "pricedetail" : require_once("./models/pricedetail.php"); require_once("./models/product.php"); $controller = new PriceDetailController(); break ;
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
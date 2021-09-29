<?php>
$controllers = array('pages'=>['home','error']) ; 

function call($controllers ,$action){
    echo "routes to ".$controllers."-".$action."<br>" ; 
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action) ;
    }else{
        call('page','error') ;
    }
}else{
    call('page','error') ;
}?>
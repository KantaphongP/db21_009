<?php class QuotationController
{
    public function index(){
        $quotation_list = quotation :: getAll();
        require_once("./views/quotation/index_quotation.php");
        )
    }
}?>
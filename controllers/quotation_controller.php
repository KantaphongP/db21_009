<?php class QuotationController
{
    public function index(){
        $quotation_list = Quotation::getAll();
        require_once("./views/quotation/index_quotation.php");
        )
    }
}?>
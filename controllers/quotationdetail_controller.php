<?php class QuotationDetailController
{
    public function index(){
        $quotationdetail_list = QuotationDetail::getAll();
        require_once("./views/quotationdetail/index_quotationdetail.php");
    }
}?>
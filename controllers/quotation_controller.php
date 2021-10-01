<?php class QuotationController
{
    public function index(){
        $quotation_lise = Quotation :: getAll();
        require_once('.views/quotation/index_quotation.php');
    }
}?>
<?php class QuotationColltroller
{
    public function index(){
        $quotation_lise = quotation :: getAll();
        require_once('.views/quotation/index_quotation.php';
        )
    }
}?>
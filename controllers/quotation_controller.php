<?php class QuotationController
{
    public function index(){
<<<<<<< HEAD
        $quotation_lise = Quotation :: getAll();
        require_once('.views/quotation/index_quotation.php';
=======
        $quotation_list = quotation :: getAll();
        require_once("./views/quotation/index_quotation.php");
>>>>>>> 6168389351737ef94be52887f06cd3f011de8261
        )
    }
}?>
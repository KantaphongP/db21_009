<?php class QuotationController
{
    public function index(){
        $quotation_list = Quotation::getAll();
        require_once("./views/quotation/index_quotation.php");
        
    }

    public function newQuotation()
    {
        $staff_list = Staff::getAll();
        $customer_list = Customer::getAll();
        $paymentterms_list = Payment_Terms::getAll();
        require_once("./views/quotation/newQuotation.php");
    }
    



}?>
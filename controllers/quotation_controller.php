<?php class QuotationController
{
    public function index(){
        $quotation_list = Quotation::getAll();
        require_once("./views/quotation/index_quotation.php");
        
    }

    /*public function newQuotation()
    {
        $StaffList = Staff::getAll();
        $CustomerList = Customer::getAll();
        $PaymentTermsList = Payment_Terms::getAll();
        require_once("./views/quotation/newQuotation.php");
    }
    */



}?>
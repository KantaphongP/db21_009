<?php class QuotationController
{
    public function index(){
        $quotation_list = Quotation::getAll();
        require_once("./views/quotation/index_quotation.php");
        
    }

    public function newQuotation()
    {
        $StaffList = Staff::getAll();
        $CustomerList = Customer::getAll();
        $PaymentTermsList = Payment_Terms::getAll();
        require_once("./views/quotation/newQuotation.php");
    }

    public function updateForm() 
    {
        
    }
    
    public function addQuotation()
    {
        $QID = $_GET['QID'];
        $date = $_GET['date'];
        $Staff = $_GET['Name'];
        $customer = $_GET['CName'];
        $Payment_Type = $_GET['Terms'];
        $detail = $_GET['detail'];
        Quotation::Add($QID,$date,$Staff,$customer,$Payment_Type,$detail);
        QuotationController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $quotation_list = Quotation::search($key);
        require_once('./views/quotation/index_quotation.php');
    }




}?>
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
        $QID = $_GET['QID'];
        $quotation = Quotation::get($QID);
        $StaffList = Staff::getAll();
        $CustomerList = Customer::getAll();
        $PaymentTermsList = Payment_Terms::getAll();
        require_once("./views/quotation/updateForm.php");
    }

    public function update()
    {
        $QID = $_GET['QID'];
        $date_order = $_GET['date_order'];
        $Staff = $_GET['Staff'];
        $customer = $_GET['customer'];
        $Payment_Type = $_GET['Payment_Terms'];
        $detail = $_GET['detail'];
        Quotation::update($QID,$date_order,$Staff,$customer,$Payment_Type,$detail);
        QuotationController::index();
    }
    
    public function addQuotation()
    {
        $QID = $_GET['QID'];
        $date_order = $_GET['date_order'];
        $Staff = $_GET['Staff'];
        $customer = $_GET['customer'];
        $Payment_Type = $_GET['Payment_Terms'];
        $detail = $_GET['detail'];
        Quotation::Add($QID,$date_order,$Staff,$customer,$Payment_Type,$detail);
        QuotationController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $quotation_list = Quotation::search($key);
        require_once("./views/quotation/index_quotation.php");
    }

    public function deleteConfirm(){
        echo " tttttttt ";
        $QID = $_GET['QID'];
        $quotation =Quotation::get($QID);
        require_once("./views/quotation/deleteConfirm.php");

    }

    public function delete(){

        $QID = $_GET['QID'];
        quotation::delete($QID);
        QuotationController::index();
        
    }




}?>
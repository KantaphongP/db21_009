<?php class QuotationDetailController
{
    public function index(){
        $quotationdetail_list = QuotationDetail::getAll();
        require_once("./views/quotation_detail/index_quotationdetail.php");
    }

    public function newQuotationDetail()
    {
        $quotation_list = Quotation::getAll();
        $product_list = Product::getAll();
        $productcolor_list = ProductColor::getAll();
        require_once("./views/quotation_detail/newQuotationDetail.php");
    }
    public function addQuotationDetail()
    {
        //echo "add" ; 
        $QID = $_GET['QID'];
        $DetailID = $_GET['DetailID']; 
        $PRID = $_GET['PRID']; 
        $Product_Color = $_GET['Product_Color']; 
        $qty = $_GET['qty']; 
        $extra_color = $_GET['extra_color'];
        QuotationDetail::Add($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color) ; 
        QuotationDetailController::index() ; 
    }

    public function search()
    {
        $key = $_GET['key'];
        $quotationdetail_list = QuotationDetail::search($key);
        require_once("./views/quotation_detail/index_quotationdetail.php");
    }
}?>
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
}?>
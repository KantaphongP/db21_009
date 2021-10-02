<?php class PriceDetailController
{
    public function index()
    {
        $pricedetail_list = price_detail::getAll();
        require_once("./views/price_detail/index_pricedetail.php");
    }
    public function newPriceDetail()
    {
        $product_list = Product::getAll();
        require_once("./views/price_detail/newPriceDetail.php");
    }
}?>
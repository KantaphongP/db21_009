<?php class PriceDetailController
{
    public function index()
    {
        $pricedetail_list = Price_detail::getAll();
        require_once("./views/order/index_order.php");
    }
}?>
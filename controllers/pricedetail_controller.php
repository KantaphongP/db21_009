<?php class PriceDetailController
{
    public function index()
    {
        $pricedetail_list = price_detail::getAll();
        require_once("./views/order/index_order.php");
    }
}?>
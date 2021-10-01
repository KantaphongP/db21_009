<?php class OrderController
{
    public function index(){
        $order_list = Order::getAll();
        require_once("./views/order/Index_order.php");
    }
}?>
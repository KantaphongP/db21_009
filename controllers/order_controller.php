<?php class OrderController{
    public function index(){
        $order_list = Order::getAll();
        require_once('views/order/index_order.php'l);
    }
}?>
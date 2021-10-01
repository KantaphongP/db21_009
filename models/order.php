<?php
class Order{
    public $OID;
    public $date;
    public $StockID;
    public $order_amount;
    public $status;

    public function __construct($OID,$date,$StockID,$order_amount,$status)
    {
        $this->OID =  $OID;
        $this->date = $date;
        $this->StockID = $StockID;
        $this->order_amount = $order_amount;
        $this->status = $status;
    }

    public static function getAll(){
        $orderList=[];
        require("connection_connect.php");
        $sql ="select * from Orders" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $OID =$my_row[OID];
            $date = $my_row[date];
            $StockID = $my_row[StockID];
            $order_amount =$my_row[order_amount];
            $status = $my_row[order_status];
            $orderList[]= new Order($OID,$date,$StockID,$order_amount,$status);
        }

        require("connection_close.php");
        return $orderList ;
    }
}
?>
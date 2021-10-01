<?php
class QuotationDetail{
    public $QID ;
    public $DetailID ; 
    public $PRID ; 
    public $Product_Color ; 
    public $QTY ; 
    public $extra_color ; 

    public function __construct($QID,$DetailID,$PRID,$Product_Color,$QTY,$extra_color)
    {
        $this->QID =  $QID;
        $this->DetailID = $DetailID;
        $this->PRID = $PRID;
        $this->Product_Color = $Product_Color;
        $this->QTY = $QTY;
        $this->extra_color = $extra_color;
    }

    public static function getAll(){
        $orderList=[];
        require("connection_connect.php");
        $sql ="select * from Quotation_Detail" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $DetailID = $my_row[DetailID];
            $PRID = $my_row[PRID];
            $Product_Color =$my_row[Product_Color];
            $QTY = $my_row[QTY];
            $extra_color = $my_row[extra_color];
            $orderList[]= new Order($QID,$DetailID,$PRID,$Product_Color,$QTY,$extra_color);
        }

        require("connection_close.php");
        return $orderList ;
    }
}
?>
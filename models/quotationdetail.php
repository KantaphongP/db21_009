<?php
class QuotationDetail{
    public $QID ;
    public $DetailID ; 
    public $PRID ; 
    public $Product_Color ; 
    public $qty ; 
    public $extra_color ; 

    public function __construct($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color)
    {
        $this->QID =  $QID;
        $this->DetailID = $DetailID;
        $this->PRID = $PRID;
        $this->Product_Color = $Product_Color;
        $this->qty= $qty;
        $this->extra_color = $extra_color;
    }

    public static function getAll(){
        $quotationdetail_list=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM Quotation_Detail" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $DetailID = $my_row[DetailID];
            $PRID = $my_row[PRID];
            $Product_Color =$my_row[Product_Color];
            $qty = $my_row[qty];
            $extra_color = $my_row[extra_color];
            $quotationdetail_list[]= new QuotationDetail($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color);
        }

        require("connection_close.php");
        return $quotationdetail_list ;
    }
}
?>
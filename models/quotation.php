<?php
class Quotation{
    public $QID;
    public $date;
    public $Staff;
    public $customer;
    public $Payment_Type;
    public $detail;

    public function __construct($OID,$date,$Staff,$customer,$Payment_Type,$detail)
    {
        $this->QID =  $QID;
        $this->date = $date;
        $this->Staff = $Staff;
        $this->customer = $customer;
        $this->Payment_Type = $Payment_Type;
        $this->detail = $detail;
    }

    public static function getAll(){
        $quotation_list=[];
        require("connection_connect.php");
        $sql ="select * from Quotation" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $date = $my_row[date];
            $Staff = $my_row[Staff];
            $customer =$my_row[customer];
            $Payment_Type = $my_row[Payment_Type];
            $detail = $my_row[detail];
            $quotation_list[]= new Quotation($OID,$date,$Staff,$customer,$Payment_Type,$detail);
        }

        require("connection_close.php");
        return $quotation_list ;
    }
}
?>
<?php class Payment_Type{
    public $Payment_Type;

    public function __construct($Payment_Type){
        $this->Payment_Type = $Payment_Type;
        
    }
    public static function getAll(){
        $PaymentTypeList=[];
        require("connection_connect.php");
        $sql ="SELECT Payment_Type.Payment_Type FROM Payment_Type" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Payment_Type = $my_row[Payment_Type];
            $PaymentTypeList[]= new Payment_Type($Payment_Type);
        }
    
        require("connection_close.php");
        return $PaymentTypeList ;
    }
}
?>
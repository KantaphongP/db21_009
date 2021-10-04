<?php class Payment_Type{
    public $Payment_Type;

    public function __construct($Payment_Types){
        $this->Payment_Type = $Payment_Type;
        
    }
    public static function getAll(){
        $paymenttype_list=[];
        require("connection_connect.php");
        $sql ="SELECT Payment_Type.Payment_Type FROM Payment_Type" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Payment_Type = $my_row[Payment_Type];
            $paymenttype_list[]= new Payment_Type($Payment_Type);
        }
    
        require("connection_close.php");
        return $paymenttype_list ;
    }
}
?>
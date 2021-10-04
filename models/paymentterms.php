<?php class Payment_Terms{
    public $Payment_Terms;

    public function __construct($Payment_Terms){
        $this->Payment_Terms = $Payment_Terms;
        
    }
    public static function getAll(){
        $PaymentTermsList=[];
        require("connection_connect.php");
        $sql ="SELECT Payment_Terms.Payment_Terms FROM Payment_Terms" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Payment_Terms = $my_row[Payment_Terms];
            $PaymentTermsList[]= new Payment_Terms($Payment_Terms);
        }
    
        require("connection_close.php");
        return $PaymentTermsList ;
    }
}
?>
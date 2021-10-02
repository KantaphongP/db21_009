<?php class Payment_Terms{
    public $Terms;

    public function __construct($Terms){
        $this->Terms = $Terms;
        
    }
    public static function getAll(){
        $PaymentTermsList=[];
        require("connection_connect.php");
        $sql ="SELECT Payment_Terms.Terms FROM Payment_Terms" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Terms = $my_row[Terms];
            $PaymentTermsList[]= new Payment_Terms($Terms);
        }
    
        require("connection_close.php");
        return $PaymentTermsList ;
    }
}
?>
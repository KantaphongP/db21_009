<?php class Customer{
    public $CID,$CName,;
    public function __construct($CID,$CName){
        $this->CID = $CID;
        $this->CName = $CName;
        
    }
    public static function getAll(){
        $CustomerList=[];
        require("connection_connect.php");
        $sql ="SELECT Customer.CID , Customer.CName FROM Customer" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $CID = $my_row[CID];
            $CName = $my_row[CName];
            
            $CustomerList[]= new Customer($CID,$CName);
        }
    
        require("connection_close.php");
        return $CustomerList ;
    }
}
?>
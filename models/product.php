<?php class Product{
    public $PRID,$Name;
    public function __construct($PRID,$Name){
        $this->PRID = $PRID;
        $this->Name = $Name;
    }
    public static function getAll(){
        $ProductList=[];
        require("connection_connect.php");
        $sql ="SELECT Product.PRID,Product.Name FROM Product" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $PRID = $my_row[PRID];
            $Name = $my_row[Name];
            $ProductList[]= new Product($PRID,$Name);
        }
    
        require("connection_close.php");
        return $ProductList ;
    }
}
?>
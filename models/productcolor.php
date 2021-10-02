<?php
class ProductColor{
    public $ColorID , $ColorName ;

    public function __construct($ColorID , $ColorName){
        $this->ColorID = $ColorID;
        $this->ColorName = $ColorName ;
    }

    public static function getAll(){
        $productcolor_list = [] ;
        require("connection_connect.php");
        $sql = "SELECT * FROM Product_Color" ; 
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $ColorID = $my_row[ColorID];
            $ColorName = $my_row[ColorName]; 
            $productcolor_list = new ProductColor($ColorID , $ColorName) ;

        }
        require("connection_close.php");
        return $productcolor_list ; 
    }
}
?>
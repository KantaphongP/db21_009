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

    public static function get($QID , $DetailID){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT * FROM Quotation_Detail WHERE QID = '$QID' AND DetailID = '$DetailID'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $QID =$my_row[QID];
        $DetailID = $my_row[DetailID];
        $PRID = $my_row[PRID];
        //echo $PRID ; 
        $Product_Color =$my_row[Product_Color];
        $qty = $my_row[qty];
        $extra_color = $my_row[extra_color];
        require("connection_close.php");
        return new QuotationDetail($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color);
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

    public static function Add($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color){
        require("connection_connect.php");
        $sql ="INSERT INTO Quotation_Detail(QID,DetailID,PRID,Product_Color,qty,extra_color)
                VALUES ('$QID','$DetailID','$PRID','$Product_Color','$qty','$extra_color')" ; 
        $result=$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($QID,$DetailID,$PRID,$Product_Color,$qty,$extra_color,$newID,$newDID){
        require("connection_connect.php");
        //echo $QID ; echo $DetailID ;echo $PRID ; 
        $sql = "UPDATE Quotation_Detail 
                SET QID = '$QID' , DetailID = '$DetailID',PRID = '$PRID',Product_Color = '$Product_Color',qty = '$qty',extra_color = '$extra_color' 
                WHERE QID = '$newID' AND DetailID = '$newDID'  " ;
        $result=$conn->query($sql);
        //echo $extra_color ; 
        require("connection_close.php");
        return "update success $result row";
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT * FROM Quotation_Detail 
        WHERE (Quotation_Detail.QID LIKE '%$key%' OR Quotation_Detail.DetailID LIKE '%$key%' 
        OR Quotation_Detail.PRID LIKE '%$key%' OR Quotation_Detail.Product_Color LIKE '%$key%' 
        OR Quotation_Detail.qty LIKE '%$key%' OR Quotation_Detail.extra_color LIKE '%$key%')" ;
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

    public static function delete($QID,$DetailID)
    {
        //echo $QID ; echo $DetailID ; 
        require("connection_connect.php");
        $sql ="DELETE from Quotation_Detail WHERE QID = '$QID' AND DetailID = '$DetailID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>
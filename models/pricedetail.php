<?php
class price_detail{
    public $PRID;
    public $Name;
    public $จำนวนเริ่มต้น;
    public $จำนวนสุดท้าย;
    public $price;
    public $สกรีนเพิ่มสีละ;

    public function __construct($PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ)
    {
        $this->PRID = $PRID;
        $this->Name = $Name;
        $this->จำนวนเริ่มต้น = $จำนวนเริ่มต้น;
        $this->จำนวนสุดท้าย = $จำนวนสุดท้าย;
        $this->price = $price;
        $this->สกรีนเพิ่มสีละ = $สกรีนเพิ่มสีละ;
    }

    public static function getAll(){
        $pricedetailList=[];
        require("connection_connect.php");
        $sql ="SELECT Price_detail.PRID,Product.Name,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ FROM Price_detail INNER JOIN Product ON Product.PRID=Price_detail.PRID" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $PRID = $my_row[PRID];
            $Name = $my_row[Name];
            $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
            $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
            $price =$my_row[price];
            $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
            $pricedetailList[]= new price_detail($PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
        }

        require("connection_close.php");
        return $pricedetailList ;
    }
    public static function get($PRID)
    {
        //echo"iiiiii";
        require("connection_connect.php");
        $sql = "SELECT Price_detail.PRID,Product.Name,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ FROM Product,Price_detail WHERE Product.PRID = Price_detail.PRID AND Price_detail.PRID = '$PRID'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $PRID = $my_row[PRID];
        $Name = $my_row[Name];
        $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
        $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
        $price =$my_row[price];
        $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
        require("connection_close.php");
        return new price_detail($PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
    }
    public static function Add($PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="INSERT INTO Price_detail(PRID,จำนวนเริ่มต้น,จำนวนสุดท้าย,price,สกรีนเพิ่มสีละ) VALUES 
        ('$PRID','$จำนวนเริ่มต้น','$จำนวนสุดท้าย','$price','$สกรีนเพิ่มสีละ')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT Price_detail.PRID,Product.Name,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ 
        FROM Price_detail INNER JOIN Product ON Product.PRID=Price_detail.PRID 
        Where (Price_detail.PRID LIKE '%$key%' OR Product.Name LIKE '%$key%' OR Price_detail.จำนวนเริ่มต้น LIKE '%$key%' OR 
        Price_detail.จำนวนสุดท้าย LIKE '%$key%' OR Price_detail.price LIKE '%$key%' OR Price_detail.สกรีนเพิ่มสีละ LIKE '%$key%')" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $PRID = $my_row[PRID];
            $Name = $my_row[Name];
            $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
            $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
            $price =$my_row[price];
            $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
            $pricedetailList[]= new price_detail($PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
        }

        require("connection_close.php");
        return $pricedetailList ;
    }
    public static function update($PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ)
    {
        require("connection_connect.php");
        $sql ="UPDATE Price_detail SET PRID='$PRID',จำนวนเริ่มต้น='$จำนวนเริ่มต้น',จำนวนสุดท้าย='$จำนวนสุดท้าย',price='$price',สกรีนเพิ่มสีละ='$สกรีนเพิ่มสีละ' WHERE Price_detail.PRID = '$PRID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

}
?>
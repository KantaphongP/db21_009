<?php
class price_detail{
public $PriceDetailID;
public $PRID;
public $ColorID;
public $จำนวนเริ่มต้น;
public $จำนวนสุดท้าย;
public $price;
public $สกรีนเพิ่มสีละ;

public function __construct($PriceDetailID,$PRID,$ColorID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ)
{
    $this->PriceDetailID = $PriceDetailID;
    $this->PRID = $PRID;
    $this->ColorID = $ColorID;
    $this->จำนวนเริ่มต้น = $จำนวนเริ่มต้น;
    $this->จำนวนสุดท้าย = $จำนวนสุดท้าย;
    $this->price = $price;
    $this->สกรีนเพิ่มสีละ = $สกรีนเพิ่มสีละ;
}

public static function getAll(){
    $pricedetailList=[];
    require("connection_connect.php");
    $sql ="SELECT Price_detail.PriceDetailID,Price_detail.PRID,Product.Name,Price_detail.ColorID,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ 
    FROM Price_detail INNER JOIN Product ON Price_detail.PRID=Product.PRID" ;
    $result=$conn->query($sql);
    while($my_row=$result->fetch_assoc())
    {
        $PriceDetailID =$my_row[PriceDetailID];
        $PRID = $my_row[PRID];
        $ColorID = $my_row[ColorID];
        $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
        $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
        $price =$my_row[price];
        $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
        $pricedetailList[]= new price_detail($PriceDetailID,$PRID,$ColorID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
    }

    require("connection_close.php");
    return $pricedetailList ;
}
}
?>
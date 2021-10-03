<?php echo "<br>Are you sure to delete this Price Detail? <br>
            <br> $price_detail->PriceDetailID $price_detail->PRID $price_detail->Name <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="pricedetail"/>
    <input type="hidden" name="PriceDetailID" value="<?php echo $price_detail->PriceDetailID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>
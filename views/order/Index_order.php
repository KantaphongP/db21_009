<table border = 1>
<tr><td>OID</td><td>date</td><td>StockID</td><td>amount</td><td>status</td></tr>
<?php foreach($order_list as $order){
    echo "<tr><td>$order->OID</td><td>$$order->date</td> <td>$$order->StockID</td><td>$$order->จำนวนที่สั่ง</td><td> $order->status</td> </tr>"; 
    
}
echo "</table>";
?>
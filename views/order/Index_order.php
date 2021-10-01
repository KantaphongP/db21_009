<table border = 1>
<tr><td>OID</td><td>date</td><td>StockID</td><td>order_amount</td><td>status</td><td>update</td><td>delete</td></tr>
<?php foreach($order_list as $order){
    echo "<tr><td>$order->OID</td><td>$$order->date</td> <td>$$order->StockID</td><td>$$order->order_amount</td><td> $order->status</td> </tr>";    
}
echo "</table>";
?>

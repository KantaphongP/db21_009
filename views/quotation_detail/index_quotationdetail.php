<table border = 1>
<tr><td>QID</td><td>DetailID</td><td>PRID</td><td>Product_Color</td><td>qty</td><td>extra_color</td></tr>
<?php foreach($quotationdetail_list as $quotationdetail){
    echo "<tr><td>$quotationdetail->QID</td><td>$quotationdetail->DetailID</td> <td>$quotationdetail->PRID</td><td>$quotationdetail->Product_Color</td><td> $quotationdetail->qty</td><td> $quotationdetail->extra_color</td></tr>";    
}
echo "</table>";
?>
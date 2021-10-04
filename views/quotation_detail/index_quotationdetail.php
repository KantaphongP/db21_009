<?php
    echo "กันตพงศ์ ปิตินรเศรษฐ์ 6220504615"
?>
<br>
<table border = 1>
    new quotation_detail <a href="?controller=quotationdetail&action=newQuotationDetail">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotationdetail"/>
        <button type="submit" name="action" value="search">
    Search</button>
    </form>
<tr>
    <td>QID</td>
    <td>DetailID</td>
    <td>PRID</td>
    <td>Product_Color</td>
    <td>qty</td>
    <td>extra_color</td>
    <td> update</td>
    <td> delete </td>
</tr>
<?php foreach($quotationdetail_list as $quotationdetail){
    echo "<tr>
    <td>$quotationdetail->QID</td>
    <td>$quotationdetail->DetailID</td>
    <td>$quotationdetail->PRID</td>
    <td>$quotationdetail->Product_Color</td>
    <td>$quotationdetail->qty</td>
    <td>$quotationdetail->extra_color</td>
    <td><a href=?controller=quotationdetail&action=updateForm&QID=$quotationdetail->QID&DetailID=$quotationdetail->DetailID>update</a></td>
    <td><a href=?controller=quotationdetail&action=deleteConfirm&QID=$quotationdetail->QID&DetailID=$quotationdetail->DetailID>delete</a></td>
    </tr>";    
}
echo "</table>";
?>
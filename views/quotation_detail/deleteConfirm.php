<?php echo "<br>Are you sure to delete this Quotation Detail? <br>
            <br>$quotationdetail->QID $quotationdetail->DetailID <br> "; 
?>
<form method = "get" action="">
    <input type="hidden" name="controller" value="quotationdetail"/>
    <input type="hidden" name="QID" value="<?php echo $quotationdetail->QID;?>" />
    <input type="hidden" name="DetailID" value="<?php echo $quotationdetail->DetailID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>    
<?php echo "<br>Are you sure to delete this Quotation? <br>
            <br> $quotation->QID $quotation->customer $quotation->Staff <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="quotation"/>
    <input type="hidden" name="QID" value="<?php echo $quotation->QID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>
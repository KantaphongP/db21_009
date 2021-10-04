<form method="get" action="">
    
    <label>QID <input type="text" name="QID" /> </label><br>
    <label>date_order <input type="text" name="date_order" /> </label><br>
    <label>Staff <select name="Staff">
        <?php foreach($staff_list as $Staff){echo "<option value= $Staff->SID>$Staff->Name</option>";}?></select></label><br>
    <label>customer <select name="customer">
        <?php foreach($customer_list as $customer){echo "<option value= $customer->CID>$customer->CName</option>";}?></select></label><br>
    <label>Payment_Type <select name="Payment_Type">
        <?php foreach($paymenttype_list as $Payment_Type){echo "<option value= $Payment_Type->Payment_Type>$Payment_Type->Payment_Type</option>";}?></select></label><br>
    
    <label>detail <input type="text" name="detail" /> </label><br>
    
    <input type="hidden" name="controller" value="quotation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>

<form method="get" action="">
    
    <label>QID <input type="text" name="QID" /> </label><br>
    <label>date_order <input type="text" name="date_order" /> </label><br>
    <label>Staff <select name="Staff">
        <?php foreach($StaffList as $Staff){echo "<option value= $Staff->SID>$Staff->Name</option>";}?></select></label><br>
    <label>Customer <select name="customer">
        <?php foreach($CustomerList as $customer){echo "<option value= $customer->CID>$customer->CName</option>";}?></select></label><br>
    <label>Payment_Terms <select name="Terms">
        <?php foreach($PaymentTermsList as $Payment_Type){echo "<option value= $Payment_Type->Terms>$Payment_Type->Terms</option>";}?></select></label><br>
    
    <label>detail <input type="text" name="detail" /> </label><br>
    
    <input type="hidden" name="controller" value="quotation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>

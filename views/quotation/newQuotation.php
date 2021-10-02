<form method="get" action="">
    <label>QID <input type="text" name="QID" /> </label><br>
    <label>date <input type="text" name="date" /> </label><br>
    <label>Staff <select name="SID">
        <?php foreach($staff_list as $Staff){echo "<option value= $Staff->SID>$Staff->Name</option>";}?></select></label><br>
    <label>Customer <select name="SID">
        <?php foreach($customer_list as $Customer){echo "<option value= $Customer->CID>$Customer->CName</option>";}?></select></label><br>
    <label>Payment_Terms <select name="Terms">
        <?php foreach($paymentterms_list as $Payment_Type){echo "<option value= $Payment_Type->Terms>$Payment_Type->Terms</option>";}?></select></label><br>
    
    <label>detail <input type="text" name="detail" /> </label><br>
    
    <input type="hidden" name="controller" value="quotation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>

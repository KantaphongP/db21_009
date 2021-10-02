<form method="get" action="">
    <label>QID <input type="text" name="QID" /> </label><br>
    <label>date <input type="text" name="date" /> </label><br>
    <label>Staff <select name="SID">
        <?php foreach($staff_list as $staff){echo "<option value= $staff->SID>$staff->Name</option>";}?></select></label><br>
    <label>Customer <select name="SID">
        <?php foreach($customer_list as $customer){echo "<option value= $customer->CID>$customer->CName</option>";}?></select></label><br>
    <label>Payment_Terms <select name="Terms">
        <?php foreach($paymentterms_list as $paymentterms){echo "<option value= $paymentterms->Terms</option>";}?></select></label><br>
    
    <label>detail <input type="text" name="detail" /> </label><br>
    
    <input type="hidden" name="controller" value="quotation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>

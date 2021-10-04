<form method ="get" action="">
    <label>QID <input type="text" name="QID"
             value="<?php echo $quotation->QID; ?>" /> </label><br>
    <label>date_order <input type="text" name="date_order"
              value="<?php echo $quotation->date_order; ?>" /> </label><br>
    <label>Staff <select name="Staff">
       <?php foreach($StaffList as $Staff){
           echo "<option value= $Staff->SID";
         if($Staff->SID==$quotation->Staff){
             echo " selected='selected'" ;
            }
            echo ">$Staff->Name</option>";
      }?></select></label><br>
    <label>customer <select name="customer">
       <?php foreach($CustomerList as $customer){
         echo "<option value= $customer->CID";
         if($customer->CID==$quotation->customer){
                echo " selected='selected'" ;
            }
            echo ">$customer->CName</option>";
     }?></select></label><br>
    <label>Payment_Terms <select name="Payment_Terms">
      <?php foreach($PaymentList as $Payment_Terms){
          echo "<option value= $Payment_Terms->Terms";
         if($Payment_Terms->Terms==$quotation->Terms){
                echo " selected='selected'" ;
            }
            echo ">$Payment_Terms->Terms</option>";
      }?></select></label><br>
    <label>detail <input type="text" name="detail"
             value="<?php echo $quotation->detail; ?>" /> </label><br>

    <input type="hidden" name="controller" value="quotationde"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
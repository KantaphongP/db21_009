<table border = 1>
    
    new quotation <a href="?controller=quotation&action=newQuotation">click</a><br>

    <form method="get"action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotation"/>
        <button type="submit" name="action" value="search">
    search</button>
    </form>

    <tr>
        <td>QID</td>
        <td>date</td>
        <td>Staff</td>
        <td>customer</td>
        <td>Payment_Type</td>
        <td>detail</td>
        
        
    </tr>
 <?php foreach($quotation_list as $quotation)
 {
     echo "<tr><td>$quotation->QID</td>
     <td>$quotation->date</td>
     <td>$quotation->Staff</td>
     <td>$quotation->customer</td>
     <td>$quotation->Payment_Type</td>
     <td>$quotation->detail</td>
     <td> update </td>
     <td> delete </td> </tr>";
 }
 echo "</table>";
 ?>

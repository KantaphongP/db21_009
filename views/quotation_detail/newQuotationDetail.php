<form method="get" action="">

    <label>QID <select name="QID">
        <?php foreach($quotation_list as $quotation){echo "<option value= $quotation->QID>$quotation->QID</option>";}?></select></label><br>
    <label>DetailID<input type="text" name="DetailID" /> </label><br>
    <label>Product <select name="PRID">
        <?php foreach($product_list as $product){echo "<option value= $product->PRID>$product->Name</option>";}?></select></label><br>
    <label>qty<input type="text" name="qty" /> </label><br>
    <label>extra_color<input type="text" name="extra_color" /> </label><br>
    
</form>

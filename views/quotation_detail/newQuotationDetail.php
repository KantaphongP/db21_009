<form method="get" action="">

    <label>QID <select name="QID">
        <?php foreach($quotation_list as $quotation){echo "<option value= $quotation->QID>$quotation->QID</option>";}?></select></label><br>
    <label>Product <select name="PRID">
        <?php foreach($product_list as $product){echo "<option value= $product->PRID>$product->Name</option>";}?></select></label><br>
    <label>Product_Color <select name="Product_Color">
        <?php foreach($productcolor_list as $productcolor){echo "<option value= $productcolor->ColorID>$productcolor->ColorName</option>";}?></select></label><br>
    <label>DetailID<input type="text" name="DetailID" /> </label><br>
    <label>qty<input type="text" name="qty" /> </label><br>
    <label>extra_color<input type="text" name="extra_color" /> </label><br>
    <input type="hidden" name="controller" value="quotation_detail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotationDetail">Save</button>
    
</form>

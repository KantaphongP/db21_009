<form method="get" action="">
    <label>QID <select name="QID">
        <?php foreach($quotation_list as $quotation){
            echo "<option value= $quotation->QID" ;
            if($quotation->QID == $quotationdetail->QID){
                echo " selected='selected'" ; 
            }
            echo ">$quotation->QID</option>";
            }?></select></label><br>
    <label>DetailID <input type="text" name="DetailID" 
            value="<?php echo $quotationdetail->DetailID; ?>" /> </label><br> 
    <label>PRID <select name="PRID">
        <?php foreach($product_list as $product){
            echo "<option value= $product->PRID" ;
            if($product->PRID == $quotationdetail->PRID){
                echo " selected='selected'" ; 
            }
            echo ">$product->PRID</option>";
            }?></select></label><br>
    <label>Product_Color <select name="Product_Color">
        <?php foreach($productcolor_list as $productcolor){
            echo "<option value= $productcolor->ColorID" ;
            if($productcolor->ColorID == $quotationdetail->Product_Color){
                echo " selected='selected'" ; 
            }
            echo ">$productcolor->ColorName</option>";
            }?></select></label><br>
    <label>qty <input type="text" name="qty" 
            value="<?php echo $quotationdetail->qty; ?>" /> </label><br>
    <label>extra_color<input type="text" name="extra_color" 
            value="<?php echo $quotationdetail->extra_color; ?>" /> </label><br>
    <input type="hidden" name="controller" value="quotationdetail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
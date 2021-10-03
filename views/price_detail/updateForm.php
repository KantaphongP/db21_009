<form method="get" action="">
    <label>Product <select name="PRID">
        <?php foreach($product_list as $product)
            {echo "<option value= $product->PRID";
                if($product->PRID==$price_detail->PRID){echo "selected='selected'";}
                echo ">$product->Name</option>";
            }?>
        </select></label><br>  
    <label>min <input type="text" name="จำนวนเริ่มต้น"
            value="<?php echo $price_detail->จำนวนเริ่มต้น ?>" /> </label><br>
    <label>max <input type="text" name="จำนวนสุดท้าย"
            value="<?php echo $price_detail->จำนวนสุดท้าย ?>" /> </label><br>
    <label>price <input type="text" name="price" 
            value="<?php echo $price_detail->price ?>" /> </label><br> 
    <label>extra <input type="text" name="สกรีนเพิ่มสีละ" 
            value="<?php echo $price_detail->สกรีนเพิ่มสีละ ?>" /> </label><br>
    <input type="hidden" name="controller" value="pricedetail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
    
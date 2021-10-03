<form method="get" action="">
    <label>ID <input type="text" name="PriceDetailID" /> </label><br>
    <label>Product <select name="PRID">
        <?php foreach($product_list as $product){echo "<option value= $product->PRID>$product->Name</option>";}?></select></label><br>
    <label>min <input type="text" name="จำนวนเริ่มต้น" /> </label><br>
    <label>max <input type="text" name="จำนวนสุดท้าย" /> </label><br>
    <label>price <input type="text" name="price" /> </label><br>
    <label>extra <input type="text" name="สกรีนเพิ่มสีละ" /> </label><br>
    
    <input type="hidden" name="controller" value="pricedetail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPriceDetail">Save</button>
</form>

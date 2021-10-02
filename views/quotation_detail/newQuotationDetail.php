<form method="get" action="">

    <label>Product <select name="PRID">
        <?php foreach($product_list as $product){echo "<option value= $product->PRID>$product->Name</option>";}?></select></label><br>
    
</form>

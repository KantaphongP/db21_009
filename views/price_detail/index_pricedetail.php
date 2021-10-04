<?php
    echo "ฏิมากานต์ เอกปัจฉิมศิริ 6220504658"
?>
<br>
<table border = 1>
    new price_detail <a href="?controller=pricedetail&action=newPriceDetail">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="pricedetail"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <tr>
        <td>ID</td>
        <td>PRID</td>
        <td>Name</td>
        <td>MIN</td>
        <td>MAX</td>
        <td>price</td>
        <td>สกรีนเพิ่มสีละ</td>
        <td>update</td>
        <td>delete</td>
    </tr>
 <?php foreach($pricedetail_list as $price_detail)
 {
     echo "<tr><td>$price_detail->PriceDetailID</td>
     <td>$price_detail->PRID</td>
     <td>$price_detail->Name</td>
     <td>$price_detail->จำนวนเริ่มต้น</td>
     <td>$price_detail->จำนวนสุดท้าย</td>
     <td>$price_detail->price</td>
     <td>$price_detail->สกรีนเพิ่มสีละ</td>
     <td><a href=?controller=pricedetail&action=updateForm&PriceDetailID=$price_detail->PriceDetailID>update</a></td>
     <td><a href=?controller=pricedetail&action=deleteConfirm&PriceDetailID=$price_detail->PriceDetailID>delete</a> </td> </tr>";
 }
 echo "</table>";
 ?>

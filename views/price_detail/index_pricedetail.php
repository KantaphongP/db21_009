<table border = 1>
    new price_detail <a href="?controller=pricedetail&action=newPriceDetail">click</a><br>
    <tr>
        <td>Name</td>
        <td>จำนวนเริ่มต้น</td>
        <td>จำนวนสุดท้าย</td>
        <td>price</td>
        <td>สกรีนเพิ่มสีละ</td>
    </tr>
 <?php foreach($pricedetail_list as $price_detail)
 {
     echo "<tr><td>$price_detail->Name</td>
     <td>$price_detail->จำนวนเริ่มต้น</td>
     <td>$price_detail->จำนวนสุดท้าย</td>
     <td>$price_detail->price</td>
     <td>$price_detail->สกรีนเพิ่มสีละ</td>
     <td> update </td>
     <td> delete </td> </tr>";
 }
 echo "</table>";
 ?>

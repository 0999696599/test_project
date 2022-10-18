<?php
 $p_receipt=$_POST['preceipt'];
 $p_amount=$_POST['pamount'];
 $p_totalreceipt=$p_receipt*$p_amount;
 $p_tax=$p_totalreceipt*0.07;
 $p_netreceipt=$p_totalreceipt+$p_tax;

 echo"ราคาสินค้าต่อชิ้น = $p_receipt<br>";
 echo"จำนวนที่ซื้อ = $p_amount<br>";
 echo"ราคารวม = $p_totalreceipt<br>";
 echo"ภาษีมูลค่าเพิ่ม = $p_tax<br>";
 echo"ราคาสุทธิ = $p_netreceipt<br>";
     
 ?>
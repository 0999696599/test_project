<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM invioce WHERE 	inid='$_GET[inid]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="get" action="editsuccess.php">
<p>
<label for="inid">รหัสใบเสร็จที่จะแก้ไข</label>
<input type="text" name="inid" id="inid" value="<?=$data['inid'];?>"/>
</p>
<p>
<label for="cid">รหัสลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="cid" id="cid" value="<?=$data['cid'];?>"/>
</p>
<p>
<label for="cartid">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="cartid" id="cartid" value="<?=$data['cartid'];?>" />
</p>

<p>
     <input type="submit" value="submit" class="btn btn-success">
</p>
</form>
</p>
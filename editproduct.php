<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM product WHERE 	prid='$_GET[prid]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="get" action="editsuccesspro.php">
<p>
<label for="prid">รหัสสินค้าที่จะแก้ไข</label>
<input type="text" name="prid" id="prid" value="<?=$data['prid'];?>"/>
</p>
<p>
<label for="pname">ชื่อสินค้าที่ต้องการแก้ไข</label>
<input type="text" name="pname" id="pname" value="<?=$data['pname'];?>"/>
</p>
<p>
<label for="price">ราคาที่จะแก้ไข</label>
<input type="text" name="price" id="price" value="<?=$data['price'];?>" />
</p>

<p>
<input type="submit" value="Submit" class="btn btn-success">
</p>
</form>
</p>
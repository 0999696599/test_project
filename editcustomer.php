<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM customer WHERE 	cid='$_GET[cid]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="get" action="editsuccesscustomer.php">
<p>
<label for="cid">รหัสลูกค้าที่จะแก้ไข</label>
<input type="text" name="cid" id="cid" value="<?=$data['cid'];?>"/>
</p>
<p>
<label for="cname">ชื่อลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="cname" id="cname" value="<?=$data['cname'];?>"/>
</p>
<p>
<label for="email">อีเมลที่จะแก้ไข</label>
<input type="text" name="email" id="email" value="<?=$data['email'];?>" />
</p>

<p>
    <input type="submit" value="submit" class="btn btn-success">
</p>
</form>
</p>
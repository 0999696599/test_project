<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM promotion1 WHERE 	proid='$_GET[proid]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="get" action="editsuccesspromo.php">
<p>
<label for="proid">รหัสโปรโมชั่นที่จะแก้ไข</label>
<input type="text" name="proid" id="proid" value="<?=$data['proid'];?>"/>
</p>
<p>
<label for="proname">ชื่อโปรโมชั่นที่ต้องการแก้ไข</label>
<input type="text" name="proname" id="proname" value="<?=$data['proname'];?>"/>
</p>
<p>
<label for="prodate">วันที่จะแก้ไข</label>
<input type="date" name="prodate" id="prodate" value="<?=$data['prodate'];?>" />
</p>

<p>
     <input type="submit" value="Submit" class="btn btn-success">
</p>
</form>
</p>
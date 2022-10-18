<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE invioce SET inid='$_GET[inid]',cid='$_GET[cid]',cartid='$_GET[cartid]'
 WHERE inid='$_GET[inid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectproduct.php'>กลับสู่หน้าหลัก</a>";
}
?>
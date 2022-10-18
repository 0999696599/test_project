<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE promotion1 SET proid='$_GET[proid]',proname='$_GET[proname]',prodate='$_GET[prodate]'
 WHERE proid='$_GET[proid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectpromo.php'>กลับสู่หน้าหลัก</a>";
}
?>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE customer SET cid='$_GET[cid]',cname='$_GET[cname]',email='$_GET[email]'
 WHERE cid='$_GET[cid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectcustomer.php'>กลับสู่หน้าหลัก</a>";
}
?>
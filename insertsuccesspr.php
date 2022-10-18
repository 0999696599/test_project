<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"phpmyadmin");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO product(prid, pname, price) VALUES ('$_GET[prid]','$_GET[pname]','$_GET[price]')";
$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='selectproduct.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='selectproduct.php'>"."กลับหน้าหลัก"."</a>";
}
?>
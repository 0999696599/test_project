<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"phpmyadmin");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO customer(cid, cname, email) VALUES ('$_GET[cid]','$_GET[cname]','$_GET[email]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='selectcustomer.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='selectcustomer.php'>"."กลับหน้าหลัก"."</a>";
}
?>
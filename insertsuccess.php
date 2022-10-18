<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"phpmyadmin");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO invioce(inid, cid, cartid) VALUES ('$_GET[inid]','$_GET[cid]','$_GET[cartid]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
}
?>
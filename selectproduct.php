<?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "phpmyadmin");
mysqli_query($objConnect, "SET NAMES utf8");
if($objConnect->connect_error)
{
    die("connection failed". $conn->connect_error);
}
echo "connection complete ";
//select data from table 
$sql = "SELECT prid, pname, price FROM product";
$result = $objConnect->query($sql);
echo "<br>";
    if ($result->num_rows > 0) {
      // head of table
     echo "<table border='2px'>";
     echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสสินค้า "; echo "</th>";echo "<th> ชื่อสินค้า: ";echo "</th>"; echo "<th> "; echo "</th>";
     echo "</tr>"; 
    // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<td><a href='editproduct.php?prid=$row[prid]'>".$row["prid"]."</td>"."</a><td>"."</a>".$row["pname"]."</td>"."<td>".$row["price"]."</td>";
     echo "</tr>"."<br>";    
    
      }
      echo "</table>";
    }
    else {
        echo "0 results";
      }
      //menu add data to table
      echo "<br>";
      echo "<a href='insertproduct.php' class='btn btn-info'>Add New product</a>";
      echo "<br>";
      echo "<br>";
      echo "<a href='index1.html'class='btn btn-Warning'>หน้าหลัก</a>";
      
      $objConnect->close();    
    ?>


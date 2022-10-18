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
$sql = "SELECT cid, cname, email FROM customer ";
$result = $objConnect->query($sql);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if ($result->num_rows > 0) {
        // head of table
       echo "<table border='2px'>";
       echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสลูกค้า "; echo "</th>";echo "<th> ชื่อลูกค้า: ";echo "</th>"; echo "<th> อีเมล"; echo "</th>";
       echo "</tr>"; 
      // output data of each row
       while($row = $result->fetch_assoc()) {
       echo "<td><a href='editcustomer.php?cid=$row[cid]'>".$row["cid"]."</td>"."</a><td>"."</a>".$row["cname"]."</td>"."<td>".$row["email"]."</td>";
       echo "</tr>"."<br>";    
      
        }
        echo "</table>";
      }
      else {
          echo "0 results";
        }
        $objConnect->close();
          //menu add data to table
  echo "<br>";
  echo "<a href='insertcustomer.php' class='btn btn-info'>Add New customer</a>";
  echo "<br>";
  echo "<br>";
  echo "<a href='index1.html'class='btn btn-Warning'>หน้าหลัก</a>";
      
    ?>
</body>
</html>

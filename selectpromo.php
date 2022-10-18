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
$sql = "SELECT proid, proname, prodate FROM promotion1";
$result = $objConnect->query($sql);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
    if ($result->num_rows > 0) {
      // head of table
     echo "<table border='2px'>";
     echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสโปรโมชั่น "; echo "</th>";echo "<th> ชื่อโปรโมชั่น: ";echo "</th>"; echo "<th> วันโปรโมชั่น"; echo "</th>";
     echo "</tr>"; 
    // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<td><a href='editpromo.php?proid=$row[proid]'>".$row["proid"]."</td>"."</a><td>"."</a>".$row["proname"]."</td>"."<td>".$row["prodate"]."</td>";
     echo "</tr>"."<br>";    
      }
      echo "</table>";
    }
    else {
        echo "0 results";
      }
      //menu add data to table
      echo "<br>";
      echo "<a href='insertpromo.php' class='btn btn-info'>Add New promotion1</a>";
      echo "<br>";
      echo "<br>";
      echo "<a href='index1.html'class='btn btn-Warning'>หน้าหลัก</a>";
    
      $objConnect->close();
    ?>
</body>
</html>
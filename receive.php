<?php
$user_name = $_GET["fusername"];
$password = $_GET["fpassword"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        echo 'ยินดีต้อนรับคุณ <h4>'. $user_name ."</h4>!<br><br>";
        echo '<a href="main.html" class="btn btn-primary"> กลับสู่หน้าหลัก </a>';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dashboard</h1>
<div class="box-set">
  <div class="box"><h4><i>Game</h4><h6> 
  <?php
    session_start();
    include("../api/connection.php");
      $sql = "SELECT g_name,g_detail,g_date,g_time As total  FROM game where g_id =1  ";
      $result = mysqli_query($connect, $sql);
       // Process and display total amount of blood
       if (!$result) {
        die("Query execution failed: " . mysqli_error($connect)); }
    $row = mysqli_fetch_assoc($result);
    // $totalAmount = $row['total'];
    echo  $result ;
  
  ?>
  </i>
  </h6>
    </div>
</body>
</html>


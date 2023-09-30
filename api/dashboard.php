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
  <div class="box"><h4><i>Dashboard</h4><h6> 
  <?php
    session_start();
    include("../api/connection.php");
      $sql = "SELECT g_detail  FROM game where g_id =1  ";
      $result = mysqli_query($connect, $sql);
       // Process and display total amount of blood
       if (!$result) {
        die("Query execution failed: " . mysqli_error($connect)); }
    $row = mysqli_fetch_assoc($result);
  
    echo  $row['g_detail']; ;
  
  ?>
  </i>
  </h6>
    </div>
</body>
</html>


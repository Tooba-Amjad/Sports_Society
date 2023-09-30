<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1>Dashboard</h1>
<div class="box-set">
  <?php
    session_start();
    include("../api/connection.php");
      $sql = "SELECT *  FROM game  ";
      $result = mysqli_query($connect, $sql);
       // Process and display total amount of blood
       if (!$result) {
        die("Query execution failed: " . mysqli_error($connect)); }
     
    
    while ($row = mysqli_fetch_assoc($result)) {
      // HTML block for each article
      $id=$row['g_id'];
      echo '<div class="games">';
      echo '<h2>' . $row['g_name'] . '</h2>';
      echo '<p>' . htmlspecialchars($row['g_detail']) . '</p>';
      echo '<p>Published on: ' . htmlspecialchars($row['g_date']) . '</p>';
     ?>
      <input type="submit" value="Enroll" onclick="update()">
      <input type="submit" value="View Participant" onclick="view()">
      
      <script>
        function update(){
        <?php
   $sql = " insert into participantion(u_id,g_id,parttype) values (1,$id,1) ";
  
        $res = mysqli_query($connect, $sql);
        if (!$res) {
          die("Query execution failed: " . mysqli_error($connect)); }
          ?>
        }
      
        </script>
        <script>
    function view(){
      
        <?php
   $sql = " select u_name from users  INNER JOIN participantion  ON users.u_id=participantion.u_id INNER JOIN game  on game.g_id=participantion.p_id where participantion.parttype=1";
   $res = mysqli_query($connect, $sql);
   if (!$res) {
     die("Query execution failed: " . mysqli_error($connect)); } 
   
   
   ?>
   alert("list found");
        }
       
        </script>
        
<?php

 echo '</div>';
  }
?>
     
  
  
  
  
</body>
</html>


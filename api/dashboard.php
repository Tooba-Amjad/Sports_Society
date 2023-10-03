<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
      .games {
    height: max-content;
    width:max-content;
    border: 2px solid black;
    border-radius: 2px;
    padding: 20px;
    margin:20px;
    display: inline-block;
    /* overflow-wrap: normal; */
}
      </style>
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
      
      ?>
      <div class="games">
        <?php
      echo '<h2>' . $row['g_name'] . '</h2>';
       echo '<p>' . htmlspecialchars($row['g_detail']) . '</p>';
      echo '<p>Published on: ' . htmlspecialchars($row['g_date']) . '</p>';
    


 echo '</div>';
  }

  ?>  
  
  
  </div>
  
</body>
</html>


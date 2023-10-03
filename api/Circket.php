<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Skecthing
    </h1>
    <h2>Game Details </h2>
    <h4>
    <?php
    session_start();
    include("../api/connection.php");
    $id = $_GET["g_id"];
      $sql = "SELECT *  FROM game where g_id=$id ";
      $result = mysqli_query($connect, $sql);
       // Process and display total amount of blood
       if (!$result) {
        die("Query execution failed: " . mysqli_error($connect)); }
       
     
    if()
    while ($row = mysqli_fetch_assoc($result)) {
      // HTML block for each article
      
      ?>
      <div class="games">
        <?php
      echo '<h2>' . $row['g_name'] . '</h2>';
       echo '<p>' . htmlspecialchars($row['g_detail']) . '</p>';
      echo '<p>Published on: ' . htmlspecialchars($row['g_date']) . '</p>';
    

 echo '</div>';}
 ?>
    </h4>

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
        alert("enrolled");
      }
      
     
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
      
</body>
</html>
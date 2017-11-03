<?php
$servername = "sql2.njit.edu";
$username = "lvj5";
$password = "mNoRgZ79";


try {

    $conn = new PDO("mysql:host=$servername;dbname=lvj5", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>"; 
    echo "<hr>";
    }
    catch(PDOException $e) 
    {
    echo "Connection failed: " . $e->getMessage();
    }
   
    $stmt = $conn->prepare("SELECT * FROM accounts where id<6"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC); 
    print_r(count($result));
    echo"<br>";
    

    echo '<table border="1"><tr>';
    foreach ($result as $row) {
        echo "<tr>";
    foreach ($row as $column) {
        echo "<td>$column</td>";
   }
    echo "</tr>";
  }    
    echo "</table>";

  $conn = null;
?>
<?php

ini_set('display_errors','On');
error_reporting(E_ALL);

$obj=new main();

class main {

	 public function __construct() {
     $servername = "sql2.njit.edu";
     $username = "lvj5";
     $password = "mNoRgZ79";

   try {
    
    // Connect to my MySQL database using PDO object
	global $conn;    
    $conn = new PDO("mysql:host=$servername;dbname=lvj5", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br><hr>"; 
    $this::test($conn);
    echo "<hr>";
    }
    catch(PDOException $e) 
    {
    echo "Connection failed: " . $e->getMessage();
    }
 }  

    public function test($conn) {    	
    
    // SELECT statement to search for records	
    $stmt = $conn->prepare("SELECT * FROM accounts where id<6");
	    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC); 
    echo"Number of records: <br>";
    print_r(count($result)); // display the number of records
    echo"<br><hr>";	
    
    // display HTML Table
    echo '<table border="1"><tr>';
    foreach ($result as $row) {
        echo "<tr>";
    foreach ($row as $column) {
        echo "<td>$column</td>";
   }
    echo "</tr>";
  }    
    echo "</table>";
 } 
}

?>
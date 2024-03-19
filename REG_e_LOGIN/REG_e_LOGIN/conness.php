<?php
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "recensioni_ristorante"; 



mysqli_report(MYSQLI_REPORT_OFF);  
$conn = new mysqli($servername, $username, $password, $dbname);	

if ($conn->connect_error) {
  header("Location: errore.html");
}

?>

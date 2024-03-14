<?php
session_start();
include('conness.php');
$_SESSION['loggato']="log";
unset($_SESSION['messaggio']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>          
      <?php
      
      $name = $_POST['name'];
      $pw = $_POST['pw'];
      
      if(empty($name) || empty($pw)){
        $_SESSION['messaggio'] = "MANCA QUALCHE DATO ...";
        header('Location: messaggio.php');
      }
      if(empty($name) && empty($pw)){
        $_SESSION['messaggio'] = "MANCA QUALCHE DATO ...";
        header('Location: messaggio.php');
      }

      $sql =
        "SELECT utente.username, utente.pwd FROM utente
          WHERE utente.username = '$name'";

      
      $result = $conn->query($sql);
      if ($result == FALSE) {
        $_SESSION['messaggio'] = " NON SEI ANCORA REGISTATO!!!";
        header('Location: messaggio.php');
      } else {
        if ($result->num_rows == 0) {
          $_SESSION['messaggio'] = $name . " NON SEI ANCORA REGISTATO!!!";
          header('Location: messaggio.php');
        } else {
          $row = $result->fetch_assoc();
          $p = $row["pwd"];
          if ($pw == $p) {
            $_SESSION['username'] = $name;
            header('Location: benvenuto.php');
          } else {
            $_SESSION['messaggio'] = $name . " HAI SBAGLIATO PASSWORD!!!";
            header('Location: messaggio.php');
          }



        }
      }



        ?>
<br><br><a href="paginalogin.html">
            <input type="button" value="TORNA INDIETRO"><br><br>
            </a>
</body>
</html>
            


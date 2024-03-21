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
      $pw = hash("sha256", $_POST['pw']);
      
      
      if(empty($name) || empty($pw)){
        $_SESSION['err'] = "MANCA QUALCHE DATO ...";
        header('Location: paginalogin.php');
      }
      if(empty($name) && empty($pw)){
        $_SESSION['err'] = "MANCA QUALCHE DATO ...";
        header('Location: paginalogin.php');
      }

      $sql =
        "SELECT utente.username, utente.password, utente.id FROM utente
          WHERE utente.username = '$name'";

      
      $result = $conn->query($sql);
      if ($result == FALSE) {
        $_SESSION['err'] = " NON SEI ANCORA REGISTATO!!!";
        header('Location: paginalogin.php');
      } else {
        if ($result->num_rows == 0) {
          $_SESSION['err'] = $name . " NON SEI ANCORA REGISTATO!!!";
          header('Location: paginalogin.php');
        } else {
          $row = $result->fetch_assoc();
          $p = $row["password"];
          if ($pw == $p) {
            $_SESSION['username'] = $name;
            $_SESSION['idUt'] = $row["id"];
            header('Location: benvenuto.php');



          } else {
            $_SESSION['err'] = $name . " HAI SBAGLIATO PASSWORD!!!";
            header('Location: paginalogin.php');
          }



          }
        }



        ?>
<br><br><a href="paginalogin.html">
            <input type="button" value="TORNA INDIETRO"><br><br>
            </a>
</body>
</html>
            


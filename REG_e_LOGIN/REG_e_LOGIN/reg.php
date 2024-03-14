<?php
session_start();
include('conness.php');
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
    if( is_null($_SESSION['loggato']) ){
                
        header("Location: paginalogin.html");
    }

    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];


    $sql =  "INSERT INTO utente (ID, username, pwd, nome, cognome, email, dataregistrazione)
    VALUES (NULL, '$username', '$password', '$nome', '$cognome', '$email', current_timestamp() )";
    

    if ($conn->query($sql)) {
        $_SESSION['messaggio'] = "REGISTRAZIONE ANDATA A BUON FINE";
        header('Location: messaggio.php');
    } else {
        echo $conn -> error;
        $_SESSION['messaggio'] = "ERRORE";
        header('Location: messaggio.php');
    }
    
      $conn->close();
    ?>
    
    
</body>
</html>


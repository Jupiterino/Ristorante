<?php
        session_start();
        include('conness.php');
        $_SESSION['loggato']="log";
        unset($_SESSION['messaggio']);

      
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
            "SELECT utente.username, utente.password FROM utente
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
                header('Location: benvenuto.php');
            } else {
                $_SESSION['err'] = $name . " HAI SBAGLIATO PASSWORD!!!";
                header('Location: paginalogin.php');
            }



            }
            }



?>

            


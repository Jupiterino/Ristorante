<?php
session_start();
include('conness.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body class="bodyy">
    <div class="container row sss" style="text-align: center; margin: auto; padding-top:6%;">
        <div class="col-12">
            <div class="scatolaa" style="padding: 1%;">
                
                
   
                <?php
                if( is_null($_SESSION['loggato']) ){
                    header("Location: paginalogin.php");
                }


                $ristoId = $_POST['ristoranti'];
                $rece = $_POST['recensione'];
                $data = $_POST['dataa'];
                $idUt = $_SESSION['idUt'];
                
                $sql =  "INSERT INTO recensione (idrecensione, voto, data, idutente, codiceristorante)
                    VALUES (NULL, $rece, '$data', $idUt, '$ristoId' )";
                    
                    var_dump($sql);

                    
                    if ($conn->query($sql)) {
                        $_SESSION['messaggio'] = "RECENSIONE AGGIUNTA CORRETTAMENTE";
                        header('Location: benvenuto.php#id1');
                    } else {
                        echo $conn -> error;
                        $_SESSION['messaggio'] = "ERRORE";
                        header('Location: benvenuto.php#id1');
                    }
                    

                ?>
    </div>
        </div>
        
    </div>
</body>
</html>
       

            


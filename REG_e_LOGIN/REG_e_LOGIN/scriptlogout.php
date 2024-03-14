<?php
session_start();
include('conness.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../PHP1/PHP1/style.css"><title>Document</title>
</head>
<body class="bodyy">
    <div class="megadiv container megga" style="text-align: center;">
    <h1 class="tit">TEATRO DEL BORGO</h1>
        <div class="login" style="padding-bottom: 5%;">
            <h2 style="font-size: 400%;">
        <?php
            if( is_null($_SESSION['loggato']) ){
                
                header("Location: paginalogin.html");
            }
            unset($_SESSION['loggato']);
            echo "LOG OUT EFFETTUATO";
        ?>
        </h2>
        </div>
        <div style="padding-top: 4%;">
            <div style="padding-top: 2%;">
              <a href="paginalogin.html" >
                <button class="botto"  >Torna alla home page</button>
            </a>  
            </div>
            
        </div>
        
    </div>
    
</body>
</html>
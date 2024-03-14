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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../PHP1/PHP1/style.css">
    <title>Document</title>
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
      echo $_SESSION['username'] . " ECCOTI QUA";

        ?>
        </h2>
        </div>
        <div class="megadiv container " style="text-align: center;">
        <br><br><br><h1>LE NOSTRE FUNZIONALITA'</h1><br><br>
    <div class="container row">
  
        <div class="col-3">
            <form action="../../PHP1/PHP1/tabella.php" method="POST">
                 <input type="submit" value="attori" style="text-decoration: none; color: rgb(231, 231, 231);" name="tabella" class="btn varieclassi"> <br>
            </form>
                 <form action="../../PHP1/PHP1/select.php" method="POST" class="formm">
            
           
                <input type="checkbox" id="vehicle1" name="prova[]" value="Nome">
                <label for="vehicle1" > Nome</label><br>
                <input type="checkbox" id="vehicle2" name="prova[]" value="AnnoNascita">
                <label for="vehicle2"> AnnoNascita</label><br>
                <input type="checkbox" id="vehicle3" name="prova[]" value="Nazionalita">
                <label for="vehicle3"> Nazionalita</label><br><br>
                <input type="submit" value="attori" class="botto" name="attori">
              </form>
        
        </div>
        <div class="col-3">
            <form action="../../PHP1/PHP1/tabella.php" method="POST">
            <input type="submit" value="film" style="text-decoration: none; color: rgb(231, 231, 231);" name="tabella" class="btn varieclassi">
            </form>
        </div>
        <div class="col-3">
            <form action="../../PHP1/PHP1/tabella.php" method="POST">
            <input type="submit" value="sale" style="text-decoration: none; color: rgb(231, 231, 231);" name="tabella" class="btn varieclassi">
            </form>
        </div>
        <div class="col-3">
            <form action="../../PHP1/PHP1/tabella.php" method="POST">
            <input type="submit" value="recensioni" style="text-decoration: none; color: rgb(231, 231, 231);" name="tabella" class="btn varieclassi">
            </form>
        </div>


    </div>
    
        
        
        
    </div>
    <div class="container row sss" style="text-align: center; margin: auto; padding-top:10%;">
        <div class="col-4">
            <div class="scatola" style="padding: 3%">
                <h1>INSERISCI ATTORE</h1>
                <form action="../../PHP1/PHP1/inserisci.php" method="POST">

                    <label>First name:</label><br>
                    <input type="text" name="name" class="form-control"><br>

                    <label>Born_date:</label><br>
                    <input type="number" name="bday" class="form-control"><br>

                    <label>Nationality:</label><br>
                    <input type="text" name="nationality" class="form-control"><br><br>

                    <input type="submit" value="Submit" class="btn" style="background-color: rgb(175, 175, 175);">

                </form>
            </div>
        </div>


        <div class="col-4">
            <div class="scatola" style="padding: 3%">
                <h1>ELIMINA PROIEZIONE</h1>
                <form action="../../PHP1/PHP1/elimina.php" method="POST">

                    <label>codice proiezione:</label><br>
                    <input type="text" name="codpro" class="form-control"><br><br>

                    <input type="submit" value="Submit" class="btn"
                        style="background-color: rgb(175, 175, 175);"><br><br>

                </form>
            </div>
        </div>
        <div class="col-4">
            <div class="scatola" style="padding: 3%">
                <h1>AGGIORNA VOTO</h1>
                <form action="../../PHP1/PHP1/aggiorna.php" method="POST">

                    <label>codice id:</label><br>
                    <input type="text" name="id" class="form-control"><br>

                    <label>voto:</label><br>
                    <input type="number" name="voto" class="form-control"><br><br>

                    <input type="submit" value="Submit" class="btn" style="background-color: rgb(175, 175, 175);">

                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <a href="scriptlogout.php" >
    <input type="button" class=" botto" value="LOG OUT">
    </a><br><br><br>
</body>
</html>
            


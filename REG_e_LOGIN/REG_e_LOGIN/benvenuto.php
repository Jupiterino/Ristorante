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
        <h1 class="tit">Circolino S.P.A.P.</h1>
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
        <br><br><br><h1>LE TUE RECENSIONI</h1><br><br>
    <div class="container row">
  
        <div class="col-12">
        <?php

            $nome = $_SESSION['username'];
            $sql = "SELECT recensione.data, recensione.voto, ristorante.nome  FROM recensione JOIN utente ON recensione.idutente = utente.id 
            JOIN ristorante ON recensione.codiceristorante = ristorante.codice
            WHERE utente.username = '$nome'";
            
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                
                echo "<h1 class='tit'>Le tue recensioni</h1>";
            echo '<table class=\'scat\'>';
            echo "<br><br>";
            $count = 0;
            while($row = mysqli_fetch_assoc($result)){
                
                if($count == 0){
                    foreach ($row as $chiave => $y) {
                        echo "<td>" . "<p style=\"pappa\">$chiave</p>"  . "</td>";
                        }
                }
                $count ++;
                echo "<tr>";
                foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
                
            }
            echo '</table><br />';
            }
            else {
                echo "ancora nessuna recensione";
              }
            


        
            $conn->close();

            echo "<br><br><a href=\"../../REG_e_LOGIN/REG_e_LOGIN/paginalogin.html\">
                <input type=\"button\" value=\"TORNA INDIETRO\" class=\"btn boyyone\" style=\"background-color: rgb(175, 175, 175); color:black\"><br><br>
                </a>";
            ?>
        </div>



    </div>
    
        
        
        
    </div>
    <br><br><br>
    <div>
        <h1>AGGIUNGI UNA RECENSIONE</h1><br><br>
        <div class="boxx">
            <div class="scatola" style="padding: 3%">
                <h1>INSERISCI RECENSIONE</h1>
                <form action="../../PHP1/PHP1/.php" method="POST">



                    <label>Ristorante:</label><br>
                    <select name="ristoranti" id="ristoranti">

                        <?php 

                            $sql = "SELECT nome, codice FROM ristorante";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        
                                foreach ($row as $value) {
                                    echo "<option value=\"$value\">$value</option>";
                                }
                         
                                
                            }
                         
                            }else {
                                
                            }
                        ?>
                    </select>

                    <label>Valutazione:</label><br>
                    <select name="recensione" id="recensione">

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        
                    </select>
                    <input type="submit" value="Submit" class="btn" style="background-color: rgb(175, 175, 175);">

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
            


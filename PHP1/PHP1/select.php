
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
                    header("Location: paginalogin.html");
                }
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinema_finale";

        mysqli_report(MYSQLI_REPORT_OFF);
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }



        $table = $_POST['attori'];

        $list = $_POST['prova'];
        $sql = "SELECT ";
        for($i=0; $i< count($list); $i++){
            $sql .= $list[$i];
            if($i != count($list)-1){
                $sql .= ", ";
            }
        }
        $sql .= " FROM $table";
        $result = $conn->query($sql);

        echo "<table class='scat'>";

        if (mysqli_num_rows($result) > 0) {
            echo "<h1 class='tit'>$table</h1>";
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
        
        }else {
            echo "0 results";
          }

    

  {

 
}
    
        $conn->close();

        echo "<br><br><a href=\"../../REG_e_LOGIN/REG_e_LOGIN/paginalogin.html\">
            <input type=\"button\" value=\"TORNA INDIETRO\" class=\"btn boyyone\" style=\"background-color: rgb(175, 175, 175); color:black\"><br><br>
            </a>";
            ?>

    </div>
        </div>
        
    </div>
</body>
</html>
       

            


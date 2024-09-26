<?php 
ini_set ( 'display_errors', 1 );
error_reporting ( E_ALL );
include "libs/db_connect.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title> MYSQL PHP</title>
		<link rel="stylesheet" href="style.css">
		  <link rel="icon" type="image/x-icon" href="favicon.png">
    </head>
<body>
<?php
		$par=$_GET["cognome"];
		$par="%".$par."%";
		print("parametro di ricerca [$par]");
        $query = "SELECT nome,cognome,matricola,data_nascita,classe from alunni where cognome like ?";
        try {
            $stmt = $con->prepare( $query );	// $con arriva da include 
            $stmt->execute(array($par));
            //Lettura numero righe risultato 
            $num = $stmt->rowCount();
          
        } catch(PDOException $ex) {
            print("Errore !".$ex->getMessage());
        }
          
        print( "<table>");
        print( "<tr>");
        print( "<th> N</th>");
        print( "<th> Matricola</th>");
        print( "<th>nome</th>");
		print( "<th>cognome</th>");
		print( "<th>classe</th>");
		print( "<th>D_Nasc</th>");
        print( "</tr>");
		$nal=1;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            print( "<tr>");

            print( "<td>$nal</td>");
            print( "<td>".$row['matricola']."</td>");
            print( "<td>".$row['nome']."</td>");
            print( "<td>".$row['cognome']."</td>");
            print( "<td>".$row['classe']."</td>");
            print( "<td>".$row['data_nascita']."</td>");

            print( "</tr>");
		    $nal++;
        }
        print( "</table>");
    
?> 
</body>
</html>

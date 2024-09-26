<?php
function tab($riga,$col){
    print("<div style='  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;'>
	<table style='text-align: center;border: 2px solid red;width:100%;  margin-left: auto;
  margin-right: auto;	'>");
    for ($i=1; $i<=$riga; $i++){
		print("<tr>");
		for ($j=1; $j<=$col; $j++){
			$prod=$i*$j;
			print("<td>$prod</td>");
		}
		echo "</tr>";
    }
    echo "</table></div>";
}
?>


<html>
<head>
	<title>Tavola Pitagorica</title>
	<style type="text/css">
	body {text-align: center; font-family: courier; border-left: 5%;}
	a {text-decoration: none; color=black}
	</style>
</head>
<body>
<h1> Tavola Pitagorica</h1>


<?php
// main
var_dump( $_GET);  // solo debug
if (empty($_GET)){
	echo "Errore!";
	echo "<br><br><a href='index.php'>&#8604; Back</a>";
}else{

    $r=$_GET["nRiga"];
    $c=$_GET["nCol"];
    if ($r==0 || $c==0){
		echo "Errore!!";
		echo "<br><br><a href='index.php'>&#8604; Back</a>";
    }else{

		tab($r,$c);
    }
}
echo "<h1>5bi was here</h1>";
?>
	
<div style="font-family: courier; font-size: 18px; text-align: right; padding-right: 5%;"> 
		<a href="index.php">Home </a> &copy; 2022
</div>
</body>
</html>
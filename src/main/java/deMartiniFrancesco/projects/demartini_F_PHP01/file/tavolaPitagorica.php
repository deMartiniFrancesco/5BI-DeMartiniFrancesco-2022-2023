<html>
<head>
	<title>Tavola Pitagorica Input</title>
	<style type="text/css">
	body {text-align: center; font-family: courier; border-left: 5%;}
	a {text-decoration: none; color=black}
	</style>
</head>
<body>
	<h1> Tavola Pitagorica</h1>
	<form action="tavolaPitagoricaResult.php" method="get">
		N* Righe <br>
		<input type="Text" name="nRiga" required/>
		<br><br>
		N* Colonne <br>
		<input type="Text" name="nCol" required/>
		<br>
		<br>
		<input type="Submit" value="Invia" />
	</form>
	
	<div style="font-size: 18px; text-align: right; padding-right: 5%;"> 
		<a href="index.php">Home </a> &copy; 2022
	</div>
</body>
</html>
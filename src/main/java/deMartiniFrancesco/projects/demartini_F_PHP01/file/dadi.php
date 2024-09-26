<html>
<head>
	<title>Roll the Dice</title>
	<style type="text/css">
	body {text-align: center; font-family: courier; border-left: 5%;}
	a {text-decoration: none; color=black}
	</style>
</head>
<body>
	<h1>Roll the Dice</h1>
	<?php
		$val1 = rand(1, 6);
		$val2 = rand(1, 6);
		print( "<img src='dadi/$val1.png' alt='$val1' />");
		print( "&nbsp;&nbsp;");
		print("<img src='dadi/$val2.png' alt='$val2' />");
		if (($val1+$val2==3)){
			print("<h3>HAI FATTO TOKYO!</h3>");
		}
	?>
	<br><br><button type="button" onClick="window.location.reload();">Roll</button>
	<br>
	<a href="dadi.php"> ROLL </a>
	<div style="font-size: 18px; text-align: right; padding-right: 5%;"> 
		<a href="index.php">Home </a> &copy; 2022
	</div>
</body>
</html>
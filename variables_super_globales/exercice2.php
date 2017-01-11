<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="informations_exercice2.php">User Infos</a>
	<?php
	$_SESSION['prenom'] = 'Jean';
	$_SESSION['nom'] = 'Dupont';
	$_SESSION['age'] = 24;
	?>
</body>
</html>
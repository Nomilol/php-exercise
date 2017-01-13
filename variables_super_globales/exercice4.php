<?php
setcookie('userName', $userName, time() + 3600);
setcookie('password', $password, time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/cookie_exercice4.php" method="POST">
		<div>
			<label for="userName">Nom d'utilisateur</label>
			<input type="text" id="userName" name='userName'>
		</div>
		<div>
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password">
		</div>
		<button id='submit'>Envoyer</button>
	</form>
</body>
</html>
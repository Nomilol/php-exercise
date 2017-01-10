<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/exercice5.php" method="GET">
		<select name="civility" id="civility">
			<option value="Madame">Madame</option>
			<option value="Monsieur">Monsieur</option>
		</select>
		<label for="name">Prénom</label>
		<input type="text" id="name">
		<label for="lastName">Nom</label>
		<input type="text" id="lastName">
		<button id="submit">Envoyer</button>
	</form>
</body>
</html>
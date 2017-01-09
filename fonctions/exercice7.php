<?php
function a($age, $genre){
	
	if($age < 18 && $genre == "femme"){
		return "Vous êtes une femme et vous êtes mineure";

	}else if($age > 18 && $genre == "femme"){
		return "Vous êtes une femme et vous êtes majeure";
	}
	if($age < 18 && $genre == "homme"){
		return "Vous êtes un homme et vous êtes mineur" ;

	}else if($age > 18 && $genre == "homme"){
		return "Vous êtes un homme et vous êtes majeur";

	}
};


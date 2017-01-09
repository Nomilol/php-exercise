<?php
function number($x, $y){
	if ($x > $y) {
		return 'Le premier nombre est plus grand';
	}else if($x < $y){
		return 'Le premier nomnbre est plus petit';
	}else{
		return 'Les deux nombres sont égaux';
	}
};

echo number('22', '08');
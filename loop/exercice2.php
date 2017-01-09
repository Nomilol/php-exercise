<?php
$count = 0;
$multiply = 22;

for ($count=0; $count < 20; $count++) { 
	$result = $count * $multiply;
	if($count < 20){
		echo $result;
	}
};
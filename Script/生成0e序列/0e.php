<?php
	for($a = 1; $a <= 1000000000; $a++){
		$md5 = md5($a);
		if(preg_match("/^0e\d+$/",$md5)){
			echo $a;
			echo "\n";
			echo $md5;
			echo "\n";
		}
	}
?>


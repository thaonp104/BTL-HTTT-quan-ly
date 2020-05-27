<?php 
	$ran_hash=md5(rand(0,999));
	$c_code=substr($ran_hash,10,5);
	$_SESSION["c_code"]=$c_code;
	echo "$c_code";
 ?>
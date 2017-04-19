<?php
	require 'stdlib.php';

	$pass = 'jhuynh85';
	$hash_cost_log2 = 8;
	$hash_portable = FALSE;

	$hasher = new PasswordHash($hash_cost_log2, $hash_portable);

	$hash1 = '$2a$08$1gvN5CRhLTVuJ2WVIAvbu.7IA4vTNw6d1bsY.9eidUqzS/uh0EYqe';
	$hash2 = $hasher->HashPassword($pass);

	echo 'Comparing '.$hash2.' and '.$hash1.'<br><br>';
	if ($hasher->CheckPassword($pass, $hash1)){
		echo 'MATCH!!';
	} else {
		echo 'NOT A MATCH!';
	}
?>
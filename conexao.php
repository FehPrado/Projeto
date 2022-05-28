

<?php

$conecta = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conecta));

mysqli_select_db($conecta, 'port');

if (!$conecta){
	echo "Error";

	exit();
}
?>
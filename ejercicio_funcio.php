<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	



	function cuentaLetras($valor){
		// global $valor;
		$longitud=[];
		if( preg_match('/[a]+/', $valor) ){ 

    array_push($longitud, 1);
    echo "existe ". count ( $longitud) ." letra A";
   
	}
	}
	cuentaLetras("Upgrade Hub");


?>

</body>
</html>
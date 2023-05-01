<?php  
	include("include.php");
	

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$prod = new Producto($base);

        $getProd = $prod->listar_compra($_GET['codigo']);

        $prod->listar_productos($getProd[0]['codigo'],$getProd[0]['producto'],$getProd[0]['descripcion'],$getProd[0]['precio']);

        header("Location: unidad7.php") 
?>
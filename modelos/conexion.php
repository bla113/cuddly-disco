<?php

class Conexion
{

	static public function conectar()
	{

		$link = new PDO(
			"mysql:host=jbrsoluciones.com;dbname=dbpqcgdxj55gpq",
			"ujbjvujfgrfs4",
			"b8^~3uf71@^}"
		);

		$link->exec("set names utf8");

		return $link;
	}


}


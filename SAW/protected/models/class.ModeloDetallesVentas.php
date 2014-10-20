<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('class.Conexion.php');

class ModeloDetallesVentas
    extends Conexion
{
	public function fecha()
	{
		$this->row["fecha"] = date("Y-m-d H:i:s");
		}

    public function getAllRows()
    {
        $sql = "SELECT * FROM ventadetalle";		
		return $this->ejecutarQuery($sql);
    }
     
     public function searchById($id)
    {
        // section -64--88-0-100--83282a2:133a0199a70:-8000:0000000000001136 begin
        $sql = "SELECT * FROM ventadetalle WHERE id = '$id'";
		$row0 = $this->ejecutarQuery($sql);
		return $row0[0];
        // section -64--88-0-100--83282a2:133a0199a70:-8000:0000000000001136 end
    }
    }

?>

<?php

error_reporting(E_ALL);


if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('class.Conexion.php');

class ModeloVenta
    extends Conexion
{
    public function insertRow($datos)
    {

        $sql = "INSERT INTO venta (
        	folio ,
        	total ,
        	usuarios_id
        	) VALUES (
        	".$datos["folio"].", 
        	".$datos["total"]. '+' .($datos["total"]. '* .15' ).",
        	".$_SESSION["userRow"]["id"].");
        	";     
		$row0 = $this->ejecutarQuery($sql);
    }

    public function getNextFolio()
    {
        $sql = "SELECT folio FROM venta ORDER BY folio DESC LIMIT 1";         
		$row0 = $this->ejecutarQuery($sql);
		$n =  @$row0[0][folio];
		$n = $n + 1;		
		return $n;
     
    }

    public function getRowByFolio($folio)
    {

        $sql = "SELECT * FROM venta  WHERE folio LIKE '%".$folio."%'";
        $row0 = $this->ejecutarQuery($sql);		
		return @$row0[0];

    }

} /* end of class ModeloVenta */

?>
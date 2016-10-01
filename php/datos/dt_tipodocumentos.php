<?php
class dt_tipodocumentos extends sgnes_datos_tabla
{
	function get_descripciones()
	{
		$sql = "SELECT id_tip_documento, tipodoc FROM tipodocumentos ORDER BY tipodoc";
		return toba::db('sgnes')->consultar($sql);
	}


}
?>
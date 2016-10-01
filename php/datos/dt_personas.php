<?php
class dt_personas extends sgnes_datos_tabla
{
	function get_listado()
	{
		$sql = "SELECT
			t_p.id_persona,
			t_t.tipodoc as id_tip_documento_nombre,
			t_p.apellido,
			t_p.fec_nacimiento,
			t_p.nombre,
			t_p.email
		FROM
			personas as t_p,
			tipodocumentos as t_t
		WHERE
				t_p.id_tip_documento = t_t.id_tip_documento
		ORDER BY nombre";
		return toba::db('sgnes')->consultar($sql);
	}


}
?>
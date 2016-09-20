<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class sgnes_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'sgnes_ci' => 'extension_toba/componentes/sgnes_ci.php',
		'sgnes_cn' => 'extension_toba/componentes/sgnes_cn.php',
		'sgnes_datos_relacion' => 'extension_toba/componentes/sgnes_datos_relacion.php',
		'sgnes_datos_tabla' => 'extension_toba/componentes/sgnes_datos_tabla.php',
		'sgnes_ei_arbol' => 'extension_toba/componentes/sgnes_ei_arbol.php',
		'sgnes_ei_archivos' => 'extension_toba/componentes/sgnes_ei_archivos.php',
		'sgnes_ei_calendario' => 'extension_toba/componentes/sgnes_ei_calendario.php',
		'sgnes_ei_codigo' => 'extension_toba/componentes/sgnes_ei_codigo.php',
		'sgnes_ei_cuadro' => 'extension_toba/componentes/sgnes_ei_cuadro.php',
		'sgnes_ei_esquema' => 'extension_toba/componentes/sgnes_ei_esquema.php',
		'sgnes_ei_filtro' => 'extension_toba/componentes/sgnes_ei_filtro.php',
		'sgnes_ei_firma' => 'extension_toba/componentes/sgnes_ei_firma.php',
		'sgnes_ei_formulario' => 'extension_toba/componentes/sgnes_ei_formulario.php',
		'sgnes_ei_formulario_ml' => 'extension_toba/componentes/sgnes_ei_formulario_ml.php',
		'sgnes_ei_grafico' => 'extension_toba/componentes/sgnes_ei_grafico.php',
		'sgnes_ei_mapa' => 'extension_toba/componentes/sgnes_ei_mapa.php',
		'sgnes_servicio_web' => 'extension_toba/componentes/sgnes_servicio_web.php',
		'sgnes_comando' => 'extension_toba/sgnes_comando.php',
		'sgnes_modelo' => 'extension_toba/sgnes_modelo.php',
	);
}
?>
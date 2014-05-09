<?php

class toba_mc_comp__1363
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'toba_editor',
    'objeto' => 1363,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ci',
    'subclase' => 'ci_principal',
    'subclase_archivo' => 'objetos_toba/ei_cuadro/ci_principal.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Editor OBJETO - ei_cuadro',
    'titulo' => NULL,
    'colapsable' => 0,
    'descripcion' => NULL,
    'fuente_proyecto' => NULL,
    'fuente' => NULL,
    'solicitud_registrar' => NULL,
    'solicitud_obj_obs_tipo' => NULL,
    'solicitud_obj_observacion' => NULL,
    'parametro_a' => NULL,
    'parametro_b' => NULL,
    'parametro_c' => NULL,
    'parametro_d' => NULL,
    'parametro_e' => NULL,
    'parametro_f' => NULL,
    'usuario' => NULL,
    'creacion' => '2005-07-18 18:20:03',
    'punto_montaje' => 12,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000249',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000249',
    'clase_icono' => 'objetos/multi_etapa.gif',
    'clase_descripcion_corta' => 'ci',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1642',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 10,
    'posicion_botonera' => 'ambos',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 45,
      'identificador' => 'eliminar',
      'etiqueta' => '&Eliminar',
      'maneja_datos' => 0,
      'sobre_fila' => 0,
      'confirmacion' => 'Este comando ELIMINARA el COMPONENTE y sus asociaciones con otros elementos del sistema. �Desea continuar?',
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'borrar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => NULL,
      'grupo' => NULL,
      'accion' => NULL,
      'accion_imphtml_debug' => NULL,
      'accion_vinculo_carpeta' => NULL,
      'accion_vinculo_item' => NULL,
      'accion_vinculo_objeto' => NULL,
      'accion_vinculo_popup' => NULL,
      'accion_vinculo_popup_param' => NULL,
      'accion_vinculo_celda' => NULL,
      'accion_vinculo_target' => NULL,
      'accion_vinculo_servicio' => NULL,
      'es_seleccion_multiple' => 0,
      'es_autovinculo' => 0,
    ),
    1 => 
    array (
      'evento_id' => 46,
      'identificador' => 'procesar',
      'etiqueta' => '&Guardar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'guardar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => 1,
      'grupo' => NULL,
      'accion' => NULL,
      'accion_imphtml_debug' => NULL,
      'accion_vinculo_carpeta' => NULL,
      'accion_vinculo_item' => NULL,
      'accion_vinculo_objeto' => NULL,
      'accion_vinculo_popup' => NULL,
      'accion_vinculo_popup_param' => NULL,
      'accion_vinculo_celda' => NULL,
      'accion_vinculo_target' => NULL,
      'accion_vinculo_servicio' => NULL,
      'es_seleccion_multiple' => 0,
      'es_autovinculo' => 0,
    ),
  ),
  '_info_puntos_control' => 
  array (
  ),
  '_info_ci' => 
  array (
    'ev_procesar_etiq' => NULL,
    'ev_cancelar_etiq' => NULL,
    'objetos' => NULL,
    'ancho' => '800px',
    'alto' => '500px',
    'posicion_botonera' => 'ambos',
    'tipo_navegacion' => 'tab_h',
    'con_toc' => 0,
    'botonera_barra_item' => 0,
  ),
  '_info_ci_me_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 362,
      'identificador' => '1',
      'etiqueta' => 'B�sicas',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/cuadro_array.gif',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 1,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    1 => 
    array (
      'pantalla' => 363,
      'identificador' => '2',
      'etiqueta' => 'Columnas',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/columna.gif',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 2,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    2 => 
    array (
      'pantalla' => 474,
      'identificador' => 'pant_cortes',
      'etiqueta' => 'Cortes Control',
      'descripcion' => 'Los [wiki:Referencia/Objetos/ei_cuadro#CortesdeControl Cortes de Control]  permiten agrupar las filas a partir de campos con valores comunes. Su finalidad es parcializar los datos para poder visualizarlos en un modo m�s comprensible.',
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/fila.gif',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 3,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    3 => 
    array (
      'pantalla' => 364,
      'identificador' => '3',
      'etiqueta' => 'Eventos',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'evento.png',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 4,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
  ),
  '_info_obj_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 362,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 32,
      'orden' => 0,
      'identificador_pantalla' => '1',
      'identificador_dep' => 'base',
    ),
    1 => 
    array (
      'pantalla' => 362,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 40,
      'orden' => 1,
      'identificador_pantalla' => '1',
      'identificador_dep' => 'prop_basicas',
    ),
    2 => 
    array (
      'pantalla' => 474,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 41,
      'orden' => 1,
      'identificador_pantalla' => 'pant_cortes',
      'identificador_dep' => 'prop_cortes',
    ),
    3 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 36,
      'orden' => 1,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'columnas_lista',
    ),
    4 => 
    array (
      'pantalla' => 364,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 39,
      'orden' => 1,
      'identificador_pantalla' => '3',
      'identificador_dep' => 'eventos',
    ),
    5 => 
    array (
      'pantalla' => 474,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 37,
      'orden' => 2,
      'identificador_pantalla' => 'pant_cortes',
      'identificador_dep' => 'cortes',
    ),
    6 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 34,
      'orden' => 2,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'columnas',
    ),
    7 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 33,
      'orden' => 3,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'columna_corte',
    ),
    8 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'dep_id' => 35,
      'orden' => 4,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'columnas_importar',
    ),
  ),
  '_info_evt_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 362,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 45,
      'identificador_pantalla' => '1',
      'identificador_evento' => 'eliminar',
    ),
    1 => 
    array (
      'pantalla' => 362,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 46,
      'identificador_pantalla' => '1',
      'identificador_evento' => 'procesar',
    ),
    2 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 45,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'eliminar',
    ),
    3 => 
    array (
      'pantalla' => 363,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 46,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'procesar',
    ),
    4 => 
    array (
      'pantalla' => 474,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 46,
      'identificador_pantalla' => 'pant_cortes',
      'identificador_evento' => 'procesar',
    ),
    5 => 
    array (
      'pantalla' => 474,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 45,
      'identificador_pantalla' => 'pant_cortes',
      'identificador_evento' => 'eliminar',
    ),
    6 => 
    array (
      'pantalla' => 364,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 45,
      'identificador_pantalla' => '3',
      'identificador_evento' => 'eliminar',
    ),
    7 => 
    array (
      'pantalla' => 364,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1363,
      'evento_id' => 46,
      'identificador_pantalla' => '3',
      'identificador_evento' => 'procesar',
    ),
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'columnas_importar',
      'proyecto' => 'toba_editor',
      'objeto' => 1632,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    1 => 
    array (
      'identificador' => 'prop_basicas',
      'proyecto' => 'toba_editor',
      'objeto' => 1361,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'eiform_cuadro_prop_basicas',
      'subclase_archivo' => 'objetos_toba/ei_cuadro/eiform_cuadro_prop_basicas.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    2 => 
    array (
      'identificador' => 'prop_cortes',
      'proyecto' => 'toba_editor',
      'objeto' => 1623,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    3 => 
    array (
      'identificador' => 'base',
      'proyecto' => 'toba_editor',
      'objeto' => 1355,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'eiform_prop_base',
      'subclase_archivo' => 'objetos_toba/eiform_prop_base.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    4 => 
    array (
      'identificador' => 'columnas',
      'proyecto' => 'toba_editor',
      'objeto' => 1362,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'eiform_cuadro_prop_cols',
      'subclase_archivo' => 'objetos_toba/ei_cuadro/eiform_cuadro_prop_cols.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    5 => 
    array (
      'identificador' => 'eventos',
      'proyecto' => 'toba_editor',
      'objeto' => 1385,
      'clase' => 'toba_ci',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
      'subclase' => 'ci_eventos_cuadro',
      'subclase_archivo' => 'objetos_toba/ci_eventos_cuadro.php',
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    6 => 
    array (
      'identificador' => 'columnas_lista',
      'proyecto' => 'toba_editor',
      'objeto' => 1364,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => 'ml_columnas_lista',
      'subclase_archivo' => 'objetos_toba/ei_cuadro/ml_columnas_lista.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    7 => 
    array (
      'identificador' => 'cortes',
      'proyecto' => 'toba_editor',
      'objeto' => 1613,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    8 => 
    array (
      'identificador' => 'columna_corte',
      'proyecto' => 'toba_editor',
      'objeto' => 1616,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    9 => 
    array (
      'identificador' => 'datos',
      'proyecto' => 'toba_editor',
      'objeto' => 1531,
      'clase' => 'toba_datos_relacion',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
      'subclase' => 'odr_ei_cuadro',
      'subclase_archivo' => 'db/odr_ei_cuadro.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
  ),
);
	}

}

?>
<?php

class toba_mc_comp__1354
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'toba_editor',
    'objeto' => 1354,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ci',
    'subclase' => 'ci_editor',
    'subclase_archivo' => 'objetos_toba/ci/ci_principal.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Editor OBJETO - ci',
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
    'creacion' => '2005-07-14 18:14:56',
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
    'cant_dependencias' => 13,
    'posicion_botonera' => 'ambos',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 29,
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
      'implicito' => 0,
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
      'evento_id' => 30,
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
      'implicito' => 0,
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
    2 => 
    array (
      'evento_id' => 31,
      'identificador' => 'cancelar_pantalla',
      'etiqueta' => '&Cancelar',
      'maneja_datos' => 0,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => NULL,
      'imagen' => NULL,
      'en_botonera' => 0,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
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
    3 => 
    array (
      'evento_id' => 32,
      'identificador' => 'aceptar_pantalla',
      'etiqueta' => '&Aceptar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => NULL,
      'imagen' => NULL,
      'en_botonera' => 0,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
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
    'alto' => '400px',
    'posicion_botonera' => 'ambos',
    'tipo_navegacion' => 'tab_h',
    'con_toc' => 0,
    'botonera_barra_item' => 0,
  ),
  '_info_ci_me_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 356,
      'identificador' => '0',
      'etiqueta' => 'B�sicas',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/multi_etapa.gif',
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
      'pantalla' => 357,
      'identificador' => '1',
      'etiqueta' => 'Dependencias',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/asociar_objeto.gif',
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
      'pantalla' => 358,
      'identificador' => '2',
      'etiqueta' => 'Pantallas',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/pantalla.gif',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 3,
      'punto_montaje' => 12,
      'subclase' => 'pantalla_edt_pantallas',
      'subclase_archivo' => 'objetos_toba/ci/pantalla_edt_pantallas.php',
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    3 => 
    array (
      'pantalla' => 30000040,
      'identificador' => '4',
      'etiqueta' => 'Layout',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/layout.png',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 4,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    4 => 
    array (
      'pantalla' => 33000012,
      'identificador' => '5',
      'etiqueta' => 'Layout Impr.',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/layout_impresion.png',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 5,
      'punto_montaje' => 12,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    5 => 
    array (
      'pantalla' => 359,
      'identificador' => '3',
      'etiqueta' => 'Eventos',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'evento.png',
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 6,
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
      'pantalla' => 356,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 23,
      'orden' => 0,
      'identificador_pantalla' => '0',
      'identificador_dep' => 'base',
    ),
    1 => 
    array (
      'pantalla' => 30000040,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 30000047,
      'orden' => 0,
      'identificador_pantalla' => '4',
      'identificador_dep' => 'cuadro_layout',
    ),
    2 => 
    array (
      'pantalla' => 33000012,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 33000028,
      'orden' => 0,
      'identificador_pantalla' => '5',
      'identificador_dep' => 'cuadro_layout_impresion',
    ),
    3 => 
    array (
      'pantalla' => 357,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 25,
      'orden' => 1,
      'identificador_pantalla' => '1',
      'identificador_dep' => 'dependencias',
    ),
    4 => 
    array (
      'pantalla' => 33000012,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 33000027,
      'orden' => 1,
      'identificador_pantalla' => '5',
      'identificador_dep' => 'form_layout_impresion',
    ),
    5 => 
    array (
      'pantalla' => 30000040,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 30000048,
      'orden' => 1,
      'identificador_pantalla' => '4',
      'identificador_dep' => 'form_layout',
    ),
    6 => 
    array (
      'pantalla' => 356,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 31,
      'orden' => 1,
      'identificador_pantalla' => '0',
      'identificador_dep' => 'prop_basicas',
    ),
    7 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 30,
      'orden' => 1,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'pantallas_lista',
    ),
    8 => 
    array (
      'pantalla' => 359,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 26,
      'orden' => 1,
      'identificador_pantalla' => '3',
      'identificador_dep' => 'eventos',
    ),
    9 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 27,
      'orden' => 2,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'pantallas',
    ),
    10 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 28,
      'orden' => 3,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'pantallas_ei',
    ),
    11 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'dep_id' => 29,
      'orden' => 4,
      'identificador_pantalla' => '2',
      'identificador_dep' => 'pantallas_evt',
    ),
  ),
  '_info_evt_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 356,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '0',
      'identificador_evento' => 'procesar',
    ),
    1 => 
    array (
      'pantalla' => 356,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '0',
      'identificador_evento' => 'eliminar',
    ),
    2 => 
    array (
      'pantalla' => 357,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '1',
      'identificador_evento' => 'eliminar',
    ),
    3 => 
    array (
      'pantalla' => 357,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '1',
      'identificador_evento' => 'procesar',
    ),
    4 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 32,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'aceptar_pantalla',
    ),
    5 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'eliminar',
    ),
    6 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'procesar',
    ),
    7 => 
    array (
      'pantalla' => 358,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 31,
      'identificador_pantalla' => '2',
      'identificador_evento' => 'cancelar_pantalla',
    ),
    8 => 
    array (
      'pantalla' => 30000040,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '4',
      'identificador_evento' => 'eliminar',
    ),
    9 => 
    array (
      'pantalla' => 30000040,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '4',
      'identificador_evento' => 'procesar',
    ),
    10 => 
    array (
      'pantalla' => 33000012,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '5',
      'identificador_evento' => 'eliminar',
    ),
    11 => 
    array (
      'pantalla' => 33000012,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '5',
      'identificador_evento' => 'procesar',
    ),
    12 => 
    array (
      'pantalla' => 359,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 29,
      'identificador_pantalla' => '3',
      'identificador_evento' => 'eliminar',
    ),
    13 => 
    array (
      'pantalla' => 359,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1354,
      'evento_id' => 30,
      'identificador_pantalla' => '3',
      'identificador_evento' => 'procesar',
    ),
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'prop_basicas',
      'proyecto' => 'toba_editor',
      'objeto' => 1356,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'eiform_prop_basicas',
      'subclase_archivo' => 'objetos_toba/ci/eiform_prop_basicas.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    1 => 
    array (
      'identificador' => 'pantallas',
      'proyecto' => 'toba_editor',
      'objeto' => 1357,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'eiform_pantallas',
      'subclase_archivo' => 'objetos_toba/ci/eiform_pantallas.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    2 => 
    array (
      'identificador' => 'form_layout',
      'proyecto' => 'toba_editor',
      'objeto' => 30000048,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'form_layout',
      'subclase_archivo' => 'objetos_toba/ei_formulario/form_layout.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    3 => 
    array (
      'identificador' => 'form_layout_impresion',
      'proyecto' => 'toba_editor',
      'objeto' => 30000048,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'form_layout',
      'subclase_archivo' => 'objetos_toba/ei_formulario/form_layout.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    4 => 
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
    5 => 
    array (
      'identificador' => 'eventos',
      'proyecto' => 'toba_editor',
      'objeto' => 1721,
      'clase' => 'toba_ci',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
      'subclase' => 'ci_eventos_del_ci',
      'subclase_archivo' => 'objetos_toba/ci/ci_eventos_del_ci.php',
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    6 => 
    array (
      'identificador' => 'dependencias',
      'proyecto' => 'toba_editor',
      'objeto' => 1402,
      'clase' => 'toba_ci',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
      'subclase' => 'ci_dependencias',
      'subclase_archivo' => 'objetos_toba/ci_dependencias.php',
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    7 => 
    array (
      'identificador' => 'pantallas_lista',
      'proyecto' => 'toba_editor',
      'objeto' => 1359,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => 'eiform_abm_detalle',
      'subclase_archivo' => 'objetos_toba/eiform_abm_detalle.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    8 => 
    array (
      'identificador' => 'pantallas_ei',
      'proyecto' => 'toba_editor',
      'objeto' => 1360,
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
      'identificador' => 'pantallas_evt',
      'proyecto' => 'toba_editor',
      'objeto' => 1416,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    10 => 
    array (
      'identificador' => 'datos',
      'proyecto' => 'toba_editor',
      'objeto' => 1507,
      'clase' => 'toba_datos_relacion',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
      'subclase' => 'odr_ci',
      'subclase_archivo' => 'db/odr_ci.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    11 => 
    array (
      'identificador' => 'cuadro_layout',
      'proyecto' => 'toba_editor',
      'objeto' => 30000101,
      'clase' => 'toba_ei_cuadro',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    12 => 
    array (
      'identificador' => 'cuadro_layout_impresion',
      'proyecto' => 'toba_editor',
      'objeto' => 30000101,
      'clase' => 'toba_ei_cuadro',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
  ),
);
	}

}

?>
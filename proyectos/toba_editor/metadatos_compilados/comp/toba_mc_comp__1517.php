<?php

class toba_mc_comp__1517
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'toba_editor',
    'objeto' => 1517,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ci',
    'subclase' => 'ci_principal',
    'subclase_archivo' => 'editores/editor_item/ci_principal.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Editor de una operaci�n',
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
    'creacion' => '2005-08-24 09:54:20',
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
    'cant_dependencias' => 6,
    'posicion_botonera' => 'ambos',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 91,
      'identificador' => 'eliminar',
      'etiqueta' => '&Eliminar',
      'maneja_datos' => 0,
      'sobre_fila' => 0,
      'confirmacion' => '�Desea eliminar la Operaci�n?',
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'borrar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
      'defecto' => 0,
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
      'evento_id' => 92,
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
  ),
  '_info_puntos_control' => 
  array (
  ),
  '_info_ci' => 
  array (
    'ev_procesar_etiq' => NULL,
    'ev_cancelar_etiq' => NULL,
    'objetos' => NULL,
    'ancho' => '600px',
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
      'pantalla' => 460,
      'identificador' => 'pant_prop_basicas',
      'etiqueta' => 'Propiedades B�sicas',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'proyecto',
      'imagen' => 'item.gif',
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
      'pantalla' => 462,
      'identificador' => 'pant_permisos_tablas',
      'etiqueta' => 'Permisos B�sicos',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'fuente.png',
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
      'pantalla' => 33000049,
      'identificador' => 'pant_permisos',
      'etiqueta' => 'Permisos por Tabla',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'usuarios/grupo.gif',
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
      'pantalla' => 466,
      'identificador' => 'pant_dependencias',
      'etiqueta' => 'Componentes',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'objetos/asociar_objeto.gif',
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
      'pantalla' => 462,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'dep_id' => 92,
      'orden' => 0,
      'identificador_pantalla' => 'pant_permisos_tablas',
      'identificador_dep' => 'permisos',
    ),
    1 => 
    array (
      'pantalla' => 466,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'dep_id' => 91,
      'orden' => 0,
      'identificador_pantalla' => 'pant_dependencias',
      'identificador_dep' => 'objetos',
    ),
    2 => 
    array (
      'pantalla' => 33000049,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'dep_id' => 33000088,
      'orden' => 0,
      'identificador_pantalla' => 'pant_permisos',
      'identificador_dep' => 'form_acl',
    ),
    3 => 
    array (
      'pantalla' => 460,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'dep_id' => 93,
      'orden' => 1,
      'identificador_pantalla' => 'pant_prop_basicas',
      'identificador_dep' => 'prop_basicas',
    ),
    4 => 
    array (
      'pantalla' => 462,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'dep_id' => 30000049,
      'orden' => 1,
      'identificador_pantalla' => 'pant_permisos_tablas',
      'identificador_dep' => 'form_tablas',
    ),
  ),
  '_info_evt_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 460,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 91,
      'identificador_pantalla' => 'pant_prop_basicas',
      'identificador_evento' => 'eliminar',
    ),
    1 => 
    array (
      'pantalla' => 460,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 92,
      'identificador_pantalla' => 'pant_prop_basicas',
      'identificador_evento' => 'procesar',
    ),
    2 => 
    array (
      'pantalla' => 462,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 91,
      'identificador_pantalla' => 'pant_permisos_tablas',
      'identificador_evento' => 'eliminar',
    ),
    3 => 
    array (
      'pantalla' => 462,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 92,
      'identificador_pantalla' => 'pant_permisos_tablas',
      'identificador_evento' => 'procesar',
    ),
    4 => 
    array (
      'pantalla' => 33000049,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 91,
      'identificador_pantalla' => 'pant_permisos',
      'identificador_evento' => 'eliminar',
    ),
    5 => 
    array (
      'pantalla' => 33000049,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 92,
      'identificador_pantalla' => 'pant_permisos',
      'identificador_evento' => 'procesar',
    ),
    6 => 
    array (
      'pantalla' => 466,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 91,
      'identificador_pantalla' => 'pant_dependencias',
      'identificador_evento' => 'eliminar',
    ),
    7 => 
    array (
      'pantalla' => 466,
      'proyecto' => 'toba_editor',
      'objeto_ci' => 1517,
      'evento_id' => 92,
      'identificador_pantalla' => 'pant_dependencias',
      'identificador_evento' => 'procesar',
    ),
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'prop_basicas',
      'proyecto' => 'toba_editor',
      'objeto' => 1519,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => 'form_prop_basicas',
      'subclase_archivo' => 'editores/editor_item/form_prop_basicas.php',
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    1 => 
    array (
      'identificador' => 'form_acl',
      'proyecto' => 'toba_editor',
      'objeto' => 33000105,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    2 => 
    array (
      'identificador' => 'permisos',
      'proyecto' => 'toba_editor',
      'objeto' => 1520,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    3 => 
    array (
      'identificador' => 'form_tablas',
      'proyecto' => 'toba_editor',
      'objeto' => 30000102,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    4 => 
    array (
      'identificador' => 'objetos',
      'proyecto' => 'toba_editor',
      'objeto' => 1521,
      'clase' => 'toba_ei_formulario_ml',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario_ml.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    5 => 
    array (
      'identificador' => 'datos',
      'proyecto' => 'toba_editor',
      'objeto' => 1554,
      'clase' => 'toba_datos_relacion',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'instancia',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
  ),
);
	}

}

?>
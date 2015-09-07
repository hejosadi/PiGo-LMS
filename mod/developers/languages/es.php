<?php
/**
 * Elgg developer tools Spanish language file.
 * Formal spanish version by LeonardoA
 */

$spanish = array(
	// menu
	'admin:develop_tools' => 'Herramientas',
	'admin:develop_tools:preview' => 'Pruebas de Temas',
	'admin:develop_tools:inspect' => 'Inspeccionar',
	'admin:develop_tools:unit_tests' => 'Pruebas de unidad',
	'admin:developers' => 'Desarrolladores',
	'admin:developers:settings' => 'Configuraci&oacute;n',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Controle su desarrollo y configuraci&oacute;n de pruebas, algunas de estas configuraciones tambi&eacute;n estan disponibles en otros men&uacute;s.',
	'developers:label:simple_cache' => 'Utilizar cache simple',
	'developers:help:simple_cache' => 'Desactive este cache durante el desarrollo, o bien sus cambios a los CSS y Javascript ser&aacute;n ignorados.',
	'developers:label:system_cache' => 'Utilizar cache de sistema',
	'developers:help:system_cache' => 'Desactive esta opci&oacute;n durante el desarrollo, o bien los cambios en sus plugins ser&aacute;n ignorados.',
	'developers:label:debug_level' => "Nivel de rastreo",
	'developers:help:debug_level' => "Esto controla la cantidad de informaci&oacute;n registrada en el log, vea tambi&eacute;n elgg_log() para m&aacute;s informaci&oacute;n.",
	'developers:label:display_errors' => 'Anunciar errores fatales de PHP',
	'developers:help:display_errors' => "Por default, el archivo .htaccess de Elgg suprime el anuncio de errores fatales.",
	'developers:label:screen_log' => "Desplegar en pantalla",
	'developers:help:screen_log' => "Esto despliega el elgg_log() y elgg_dump() en la p&aacute;gina web.",
	'developers:label:show_strings' => "Mostrar traducciones sin formato",
	'developers:help:show_strings' => "Esto despliega las traducciones utilizadas por elgg_echo().",
	'developers:label:wrap_views' => "Salto de p&aacute;gina",
	'developers:help:wrap_views' => "Esto provoca saltos de p&aacute;gina en casi todas las vistas con comentarios HTML, &uacute;til para encontrar alg&uacute;n HTML espec&iacute;fico.",
	'developers:label:log_events' => "Registro de eventos y marcadores en plugins",
	'developers:help:log_events' => "Escriba eventos y marcadores de plugins al log. Atenci&oacute;n, esto puede causar una gran cantidad de registros por p&aacute;gina.",

	'developers:debug:off' => 'Apagado',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Alerta',
	'developers:debug:notice' => 'Noticia',
	
	// inspection
	'developers:inspect:help' => 'Inspeccionar configuraci&oacute;n del framework Elgg.',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' en %s",

	// theme preview
	'theme_preview:general' => 'Introducci&oacute;n',
	'theme_preview:breakout' => 'Presentar fuera del iframe',
	'theme_preview:buttons' => 'Botones',
	'theme_preview:components' => 'Componentes',
	'theme_preview:forms' => 'Formas',
	'theme_preview:grid' => 'Malla',
	'theme_preview:icons' => '&Iacute;conos',
	'theme_preview:modules' => 'M&oacute;dulos',
	'theme_preview:navigation' => 'Navegaci&oacute;n',
	'theme_preview:typography' => 'Tipograf&iacute;a',
	'theme_preview:miscellaneous' => 'Otros',
	
	// unit tests
	'developers:unit_tests:description' => 'Elgg contiene pruebas unitarias e integrales para detectar bugs en sus clases y funciones b&aacute;sicas.',
	'developers:unit_tests:warning' => 'Cuidado: no ejecute estas pruebas en su sitio productivo, ya que pueden corromper la base de datos.',
	'developers:unit_tests:run' => 'Ejecutar',

	// status messages
	'developers:settings:success' => 'Configuraci&oacute;n salvada',
);

add_translation('es', $spanish);

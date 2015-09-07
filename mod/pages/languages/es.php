<?php
/**
 * Pages spanish language pack
 * Formal spanish version by LeonardoA
 * @package ElggPages
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "P&aacute;ginas",
	'pages:owner' => "P&aacute;ginas de %s",
	'pages:friends' => "P&aacute;ginas de amigos",
	'pages:all' => "Todas las p&aacute;ginas del sitio",
	'pages:add' => "Agregar p&aacute;gina",

	'pages:group' => "P&aacute;ginas de grupos",
	'groups:enablepages' => 'Habilitar p&aacute;ginas de grupos',

	'pages:edit' => "Editar esta p&aacute;gina",
	'pages:delete' => "Borrar esta p&aacute;gina",
	'pages:history' => "Historial",
	'pages:view' => "Ver p&aacute;gina",
	'pages:revision' => "Revisi&oacute;n",
	'pages:current_revision' => "Revisi&oacute;n Actual",
	'pages:revert' => "Deshacer",
	
	'pages:navigation' => "Navegaci&oacute;n",
	'pages:new' => "Una nueva p&aacute;gina",
	'pages:notification' =>
'%s ha agregado una nueva p&aacute;gina:

%s
%s

Ver y comentar respecto a la nueva p&aacute;gina:
%s
',
	'item:object:page_top' => 'P&aacute;ginas principales',
	'item:object:page' => 'P&aacute;ginas',
	'pages:nogroup' => 'Este grupo no tiene p&aacute;ginas a&uacute;n',
	'pages:more' => 'M&aacute;s p&aacute;ginas',
	'pages:none' => 'No se han creado p&aacute;ginas a&uacute;n',

	/**
	* River
	**/

	'river:create:object:page' => '%s ha creado la p&aacute;gina %s',
	'river:create:object:page_top' => '%s cre&oacute; la p&aacute;gina %s',
	'river:update:object:page' => '%s ha actualizado la p&aacute;gina %s',
	'river:update:object:page_top' => '%s actualiz&oacute; la p&aacute;gina %s',
	'river:comment:object:page' => '%s ha comentado en la p&aacute;gina %s',
	'river:comment:object:page_top' => '%s coment&oacute; en la p&aacute;gina %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'T&iacute;tulo de la p&aacute;gina',
	'pages:description' => 'Contenido',
	'pages:tags' => 'Palabras clave',
	'pages:parent_guid' => 'Pagina anterior',
	'pages:access_id' => 'Acceso de lectura',
	'pages:write_access_id' => 'Acceso de escritura',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No tiene acceso a esa p&aacute;gina',
	'pages:cantedit' => 'No puede editar esta p&aacute;gina',
	'pages:saved' => 'P&aacute;gina guardada',
	'pages:notsaved' => 'La p&aacute;gina no pudo ser guardada',
	'pages:error:no_title' => 'Debe especificar un t&iacute;tulo para esta p&aacute;gina.',
	'pages:delete:success' => 'La p&aacute;gina ha sido borrada.',
	'pages:delete:failure' => 'La p&aacute;gina no pudo ser borrada.',

	/**
	 * Page
	 */
	'pages:strapline' => '&Uacute;ltima actualizaci&oacute;n de %s por %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revisi&oacute;n de %s creada por %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'N&uacute;mero de p&aacute;ginas a mostrar',
	'pages:widget:description' => "Esta es la lista de sus p&aacute;ginas.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Ver p&aacute;gina",
	'pages:label:edit' => "Editar p&aacute;gina",
	'pages:label:history' => "Historial de la p&aacute;gina",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Esta p&aacute;gina",
	'pages:sidebar:children' => "P&aacute;gina secundaria",
	'pages:sidebar:parent' => "Nivel superior",

	'pages:newchild' => "Crear una p&aacute;gina secundaria",
	'pages:backtoparent' => "Regresar a '%s'",
);

add_translation("es", $spanish);
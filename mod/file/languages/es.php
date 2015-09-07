<?php
/**
 * Elgg file plugin spanish language pack
 * Formal spanish version by LeonardoA
 *
 * @package ElggFile
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Archivos",
	'file:user' => "Archivos de %s",
	'file:friends' => "Archivos de amigos",
	'file:all' => "Archivos de todo el sitio",
	'file:edit' => "Editar archivo",
	'file:more' => "M&aacute;s archivos",
	'file:list' => "Vista de lista",
	'file:group' => "Documentos de la Clase",
	'file:gallery' => "Vista de galer&iacute;a",
	'file:gallery_list' => "Vista de Galer&iacute;a o de lista",
	'file:num_files' => "N&uacute;mero de archivos a mostrar",
	'file:user:gallery'=>'Ver galer&iacute;a de %s',
	'file:upload' => "Subir un archivo",
	'file:replace' => 'Reemplazar el contenido del archivo (dejar en blanco para no cambiar el archivo)',
	'file:list:title' => "%s: %s %s",
	'file:title:friends' => "Amigos y sus ",

	'file:add' => 'Subir un archivo',

	'file:file' => "Archivo",
	'file:title' => "T&iacute;tulo",
	'file:desc' => "Descripci&oacute;n",
	'file:tags' => "Palabras clave",

	'file:list:list' => 'Cambiar a vista de lista',
	'file:list:gallery' => 'Cambiar a vista de galer&iacute;a',

	'file:types' => "Tipos de archivos",

	'file:type:' => 'Archivos',
	'file:type:all' => "Todos los archivos",
	'file:type:video' => "Videos",
	'file:type:document' => "Documentos",
	'file:type:audio' => "Audio",
	'file:type:image' => "Im&aacute;genes",
	'file:type:general' => "Archivos en general",

	'file:user:type:video' => "Videos de %s",
	'file:user:type:document' => "Documentos de %s",
	'file:user:type:audio' => "Archivos de audio de %s",
	'file:user:type:image' => "Im&aacute;genes de %s",
	'file:user:type:general' => "Archivos de %s",

	'file:friends:type:video' => "Videos de sus amigos",
	'file:friends:type:document' => "Documentos de sus amigos",
	'file:friends:type:audio' => "Archivos de audio de sus amigos",
	'file:friends:type:image' => "Im&aacute;genes de sus amigos",
	'file:friends:type:general' => "Archivos de sus amigos",

	'file:widget' => "Widget de archivos",
	'file:widget:description' => "Muestre sus &uacute;ltimos archivos",

	'groups:enablefiles' => 'Activar Documentos para la clase?',

	'file:download' => "Descargar",

	'file:delete:confirm' => "&iquest;Seguro que desea borrar este archivo?",

	'file:tagcloud' => "Palabras clave",

	'file:display:number' => "N&uacute;mero de archivos a mostrar",

	'river:create:object:file' => '%s subi&oacute; el archivo %s',
	'river:comment:object:file' => '%s hizo un comentario respecto al archivo %s',

	'item:object:file' => 'Archivo',

	'file:newupload' => 'Se ha subido un nuevo archivo',
	'file:notification' =>
'%s ha subido un nuevo archivo:

%s
%s

Ver y comentar respecto al archivo:
%s
',

	/**
	 * Embed media
	 **/

	'file:embed' => "Medios incrustados",
	'file:embedall' => "Todo",

	/**
	 * Status messages
	 */

	'file:saved' => "Su archivo ha sido guardado exitosamente.",
	'file:deleted' => "Su archivo fue borrado exitosamente.",

	/**
	 * Error messages
	 */

	'file:none' => "No hay archivos.",
	'file:uploadfailed' => "No se pudo guardar el archivo.",
	'file:downloadfailed' => "El archivo no est&aacute; disponible por el momento.",
	'file:deletefailed' => "El archivo no pudo ser borrado.",
	'file:noaccess' => "No tiene permisos para modificar este archivo",
	'file:cannotload' => "Ocurri&oacute; un error al subir el archivo",
	'file:nofile' => "Debe seleccionar un archivo",
);

add_translation("es", $spanish);
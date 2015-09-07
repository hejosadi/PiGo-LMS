<?php
/**
 * Elgg messageboard action page
 * Formal spanish version by LeonardoA
*/

 $spanish = array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "Pared de mensajes",
	'messageboard:messageboard' => "Pared de mensajes",
	'messageboard:viewall' => "Ver todo",
	'messageboard:postit' => "Escribir",
	'messageboard:history:title' => "Historial",
	'messageboard:none' => "No hay nada escrito en esta pared de mensajes",
	'messageboard:num_display' => "N&uacute;mero de mensajes a mostrar",
	'messageboard:desc' => "Esta es una pared de mensajes en la que puede a&ntilde;adir contenido y otros usuarios podr&aacute;n comentar.",

	'messageboard:user' => "Pared de mensajes de %s",

	'messageboard:replyon' => 'responder en',
	'messageboard:history' => "historial",

	'messageboard:owner' => 'Pared de mensajes de %s',
	'messageboard:owner_history' => 'Posts de %s en la pared de mensajes de %s',

	/**
	 * Message board widget river
	 */
	'river:messageboard:user:default' => "%s ha publicado en la pared de mensajes de %s",

	/**
	 * Status messages
	 */

	'messageboard:posted' => "Ha publicado en su pared de mensajes exitosamente.",
	'messageboard:deleted' => "Ha eliminado el mensaje.",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => 'Tiene nuevos comentarios en su pared de mensajes',
	'messageboard:email:body' => "Tiene un comentario nuevo de %s en su pared de mensajes. Puede leerlo aqu&iacute;:

%s



Para ver los comentarios en su pared de mensajes, haga click a continuaci&oacute;n:

	%s

Para ver el perfil de %s, haga click a continuaci&oacute;n:

	%s

No se puede responder a este email.",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "Es necesario a&ntilde;adir algo al campo del mensaje antes de guardar.",
	'messageboard:notfound' => "No se pudo encontrar el elemento especificado.",
	'messageboard:notdeleted' => "No se pudo borrar este mensaje.",
	'messageboard:somethingwentwrong' => "Algo sali&oacute; mal al guardar su mensaje. Aseg&uacute;rese de haber escrito algo.",

	'messageboard:failure' => "Ocurri&oacute; un error desconocido al guardar su mensaje. Intente de nuevo.",

);

add_translation("es", $spanish);

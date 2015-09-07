<?php
/**
 * Blog Spanish language file.
 * Formal spanish version by LeonardoA
 */

$spanish = array(
	'blog' => 'Noticias',
	'blog:blogs' => 'Noticias',
	'blog:revisions' => 'Revisiones',
	'blog:archives' => 'Archivos',
	'blog:blog' => 'Noticias',
	'item:object:blog' => 'Noticias',

	'blog:title:user_blogs' => 'Noticias de %s',
	'blog:title:all_blogs' => 'Todos las Noticias',
	'blog:title:friends' => 'Noticias de amigos',

	'blog:group' => 'Noticias del grupo',
	'blog:enableblog' => 'Habilitar Noticias para grupos',
	'blog:write' => 'Escribir una Noticia',

	// Editing
	'blog:add' => 'Publicar una Noticia',
	'blog:edit' => 'Editar Noticia',
	'blog:excerpt' => 'Extracto',
	'blog:body' => 'Texto',
	'blog:save_status' => '&Uacute;ltimo guardado: ',
	'blog:never' => 'Nunca',

	// Statuses
	'blog:status' => 'Estado',
	'blog:status:draft' => 'Borrador',
	'blog:status:published' => 'Publicado',
	'blog:status:unsaved_draft' => 'Borrador sin guardar',

	'blog:revision' => 'Revisi&oacute;n',
	'blog:auto_saved_revision' => 'Revisi&oacute;n autoguardada',

	// messages
	'blog:message:saved' => 'Noticia guardada.',
	'blog:error:cannot_save' => 'No se puede guardar la Noticia.',
	'blog:error:cannot_write_to_container' => 'Acceso insuficiente para guardar el art&iacute;culo.',
	'blog:messages:warning:draft' => 'Este es un borrador no guardado de este art&iacute;culo',
	'blog:edit_revision_notice' => '(Versi&oacute;n antigua)',
	'blog:message:deleted_post' => 'Art&iacute;culo borrado.',
	'blog:error:cannot_delete_post' => 'No se puede borrar el art&iacute;culo.',
	'blog:none' => 'No hay entradas',
	'blog:error:missing:title' => 'Por favor ingrese un t&iacute;tulo',
	'blog:error:missing:description' => 'Por favor ingrese contenido',
	'blog:error:cannot_edit_post' => 'Este art&iacute;culo no existe o no tiene permiso para verla.',
	'blog:error:revision_not_found' => 'No se puede encontrar esta revisi&oacute;n.',

	// river
	'river:create:object:blog' => '%s ha publicado un art&iacute;culo en %s',
	'river:comment:object:blog' => '%s ha comentado en el art&iacute;culo %s',

	// notifications
	'blog:newpost' => 'Un nuevo art&iacute;culo',
	'blog:notification' =>
'
%s ha publicado una nueva noticia.

%s
%s

Ver y comentar:
%s
',

	// widget
	'blog:widget:description' => 'Mostrar sus &uacute;ltimas Noticias',
	'blog:moreblogs' => 'M&aacute;s Noticias',
	'blog:numbertodisplay' => 'N&uacute;mero de Noticias a mostrar',
	'blog:noblogs' => 'No hay Noticias'
);

add_translation('es', $spanish);

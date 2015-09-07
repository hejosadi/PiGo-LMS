<?php
/**
 * Bookmarks Spanish language file
 * Formal spanish version by LeonardoA
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "Marcadores",
	'bookmarks:add' => "A&ntilde;adir marcador",
	'bookmarks:edit' => "Editar marcador",
	'bookmarks:owner' => "Marcadores de %s",
	'bookmarks:friends' => "Marcadores de amigos",
	'bookmarks:everyone' => "Todos los marcadores del sitio",
	'bookmarks:this' => "Marcar esta p&aacute;gina",
	'bookmarks:this:group' => "Marcar en %s",
	'bookmarks:bookmarklet' => "Obtener marcadores",
	'bookmarks:bookmarklet:group' => "Obtener widget de marcadores del grupo",
	'bookmarks:inbox' => "Bandeja de entrada de marcadores",
	'bookmarks:morebookmarks' => "M&aacute;s marcadores",
	'bookmarks:more' => "M&aacute;",
	'bookmarks:with' => "Compartir con",
	'bookmarks:new' => "Un nuevo marcador",
	'bookmarks:address' => "Direcciones del marcador",
	'bookmarks:none' => 'No hay marcadores',

	'bookmarks:notification' =>
'%s ha a&ntilde;adido un nuevo marcador:

%s - %s
%s

Ver y comentar:
%s
',

	'bookmarks:delete:confirm' => "&ntilde;Seguro que desea borrar este marcador?",

	'bookmarks:numbertodisplay' => 'N&uacute;mero de marcadores a mostrar',

	'bookmarks:shared' => "Marcado",
	'bookmarks:visit' => "Visitar v&iacute;nculo",
	'bookmarks:recent' => "Marcadores recientes",

	'river:create:object:bookmarks' => '%s ha marcado %s',
	'river:comment:object:bookmarks' => '%s ha comentado en el marcador %s',
	'bookmarks:river:annotate' => 'ha comentado este marcador',
	'bookmarks:river:item' => 'un item',

	'item:object:bookmarks' => 'Marcadores',

	'bookmarks:group' => 'Marcadores de grupos',
	'bookmarks:enablebookmarks' => 'Habilitar marcadores para Grupos',
	'bookmarks:nogroup' => 'Este grupo no tiene marcadores a&uacute;n',
	'bookmarks:more' => 'M&aacute;s marcadores',

	'bookmarks:no_title' => 'Sin t&iacute;tulo',

	/**
	* Widget and bookmarklet
	*/
	'bookmarks:widget:description' => "Mostrar sus &uacute;ltimo0s marcadores.",

	'bookmarks:bookmarklet:description' =>	
	"El widget de marcadores permite compartir cualquier recurso de la Web con sus amigos, o sinmplemente para usted mismo. Para usarlo, simplemente arrastre el enlace a la barra de marcadores de su navegador:",

	'bookmarks:bookmarklet:descriptionie' => 
	"Si utiliza Internet Explorer, necesita hacer click con el bot&oacute;n derecho del rat&oacute;n al enlace, seleccionar 'Agregar a favoritos' en la barra de favoritos.",

	'bookmarks:bookmarklet:description:conclusion' =>
			"A continuación, puede guardar cualquier página que visite haciendo clic en él en cualquier momento.",

	/**
	* Status messages
	*/

	'bookmarks:save:success' => "El item fue marcado exitosamente.",
	'bookmarks:delete:success' => "El marcador ha sido borrado.",

	/**
	* Error messages
	*/

	'bookmarks:save:failed' => "El marcador no pudo ser guardado. Aseg&uacute;rese de que el t&iacute;tulo y el enlace est&eacute;n correctamente escritos.",
	'bookmarks:save:invalid' => "La direcci&oacute;n es inv&aacute;lida y no pudo ser guardada.",
	'bookmarks:delete:failed' => "El marcador no pudo ser borrado. Intente nuevamente.",
);

add_translation('es', $spanish);
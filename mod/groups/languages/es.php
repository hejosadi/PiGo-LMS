<?php
/**
 * Elgg groups plugin spanish language pack
 * Formal spanish version by LeonardoA
 * @package ElggGroups
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Clases",
	'groups:owned' => "Clases que administro",
	'groups:owned:user' => 'Clases que administra %s',
	'groups:yours' => "Mis clases",
	'groups:user' => "Clases de %s",
	'groups:all' => "Todas los clases",
	'groups:add' => "Crear clase",
	'groups:edit' => "Editar clase",
	'groups:delete' => 'Borrar clase',
	'groups:membershiprequests' => 'Manejar solicitudes de uni&oacute;n a la clase',
	'groups:membershiprequests:pending' => 'Manejar solicitudes de uni&oacute;n a clases (%s)',
	'groups:invitations' => 'Invitaciones a clases',
	'groups:invitations:pending' => 'Invitaciones a clases (%s)',

	'groups:icon' => '&Iacute;cono de clase (dejar en blanco para imagen por defecto)',
	'groups:name' => 'Nombre de la clase',
        'groups:quicklinks' => 'Dashboard',
        'groups:homeworks' => "Ver todas las tareas de la clase",
	'groups:username' => 'Nombre corto de la clase (mostrado en la URL, s&oacute;lo caracteres alfanum&eacute;ricos)',
	'groups:description' => 'Descripci&oacute;n completa',
	'groups:briefdescription' => 'Descripci&oacute;n breve',
	'groups:interests' => 'Etiquetas',
	'groups:website' => 'Sitio Web',
	'groups:members' => 'Alumnos inscritos en la clase',
	'groups:my_status' => 'Mi estatus',
	'groups:my_status:group_owner' => 'Usted administra esta clase virtual',
	'groups:my_status:group_member' => 'Usted esta en estea clase',
	'groups:subscribed' => 'Notificaciones de la clase activadas',
	'groups:unsubscribed' => 'Notificaciones de la clase desactivadas',

	'groups:members:title' => 'Miembros de %s',
	'groups:members:more' => "Ver todos los alumnos inscritos",
	'groups:membership' => "Ver los permisos de los miembros",
	'groups:access' => "Permisos de acceso",
	'groups:owner' => "Profesor",
	'groups:owner:warning' => "Atenci&oacute;n: si cambia este valor, ya no ser&aacute; administrador de esta clase.",
	'groups:widget:num_display' => 'N&uacute;mero de clases a mostrar',
	'groups:widget:membership' => 'Mis Clases',
	'groups:widgets:description' => 'Muestra en su perfil las clases a los que pertenece',
	'groups:noaccess' => 'No hay acceso a la clase',
	'groups:permissions:error' => 'No tiene permisos para realizar esta acci&oacute;n',
	'groups:ingroup' => 'en el grupo',
	'groups:cantcreate' => 'Solo administradores pueden crear clases.',
	'groups:cantedit' => 'No puede editar este grupo',
	'groups:saved' => 'Clase guardado',
	'groups:featured' => 'Clases destacados',
	'groups:makeunfeatured' => 'No destacar',
	'groups:makefeatured' => 'Destacar',
	'groups:featuredon' => '%s es miembro de una clase destacada.',
	'groups:unfeatured' => '%s ha sido retirado de las clases destacados.',
	'groups:featured_error' => 'Clase inv&aacute;lida.',
	'groups:joinrequest' => 'Solicitar unirse',
	'groups:join' => 'Unirse a la clase',
	'groups:leave' => 'Abandonar la clase',
	'groups:invite' => 'Invitar amigos',
	'groups:invite:title' => 'Invitar amigos a esta clase',
	'groups:inviteto' => "Invitar amigos a '%s'",
	'groups:nofriends' => "No tiene amigos que no hayan sido invitados a la clase.",
	'groups:nofriendsatall' => 'No hay amigos para invitar',
	'groups:viagroups' => "a traves de los grupos",
	'groups:group' => "Clase",
	'groups:search:tags' => "etiqueta",
	'groups:search:title' => "Buscar grupos marcados con '%s'",
	'groups:search:none' => "No se encontraron grupos que cumplieran con la b&uacute;squeda",
	'groups:search_in_group' => "Buscar en esta clase",
	'groups:acl' => "Clase: %s",

	'discussion:notification:topic:subject' => 'Notificacion Nueva!',
	'groups:notification' =>
'%s ha agregado una nueva tarea en la clase de %s:

%s
%s

Para ver la tarea y responderla vaya a la siguiente direccion.:
%s
',

	'discussion:notification:reply:body' =>
'%s ha enviado la tarea %s exitosamente. Muchas Gracias!:

%s

Ver y comentar:
%s
',

	'groups:activity' => "Actividad del grupo",
	'groups:enableactivity' => 'Permitir actividades del grupo',
	'groups:activity:none' => "El grupo no ha tenido actividad a&uacute;n",

	'groups:notfound' => "No se encontr&oacute; el grupo",
	'groups:notfound:details' => "El grupo solicitado no existe o no tiene permiso para verlo",

	'groups:requests:none' => 'No hay solicitudes de membres&iacute;a.',

	'groups:invitations:none' => 'Actualmente no tiene invitaciones.',

	'item:object:groupforumtopic' => "Temas de discusi&oacute;n",

	'groupforumtopic:new' => "A&ntilde;adir un tema de discusi&oacute;n",

	'groups:count' => "Clases creadas",
	'groups:open' => "Clase abierta",
	'groups:closed' => "Clase privada",
	'groups:member' => "miembros",
	'groups:searchtag' => "Buscar grupos por palabra clave",

	'groups:more' => 'M&aacute;s clases',
	'groups:none' => 'No hay clases',


	/*
	 * Access
	 */
	'groups:access:private' => 'Cerrado &mdash; los miembros deben ser invitados',
	'groups:access:public' => 'Abierto &mdash; cualquiera puede unirse',
	'groups:access:group' => 'S&oacute;lo miembros del grupo',
	'groups:closedgroup' => 'Clase Privada. Necesita ser miembro de esta clase para accesar al contenido',
	'groups:closedgroup:request' => 'Para solicitar unirse, haga click en "Solicitar unirse".',
	'groups:visibility' => '&iquest;Quienes pueden ver este grupo?',

	/*
	Group tools
	*/
	'groups:enableforum' => 'Habilitar discusi&oacute;n en los grupos',
	'groups:yes' => 's&iacute;',
	'groups:no' => 'no',
	'groups:lastupdated' => '&Uacute;ltima actualizacion de %s por %s',
	'groups:lastcomment' => '&Uacute;ltimo comentario de %s por %s',

	/*
	Group discussion
	*/
	'discussion' => 'Tareas',
	'discussion:add' => 'A&ntilde;adir tarea a la clase',
	'discussion:latest' => 'Todas las tareas de la clase',
	'discussion:group' => 'Tareas',
	'discussion:none' => 'No hay tareas',
	'discussion:reply:title' => 'Respuesta por %s',

	'discussion:topic:created' => 'La tarea ha sido creado.',
	'discussion:topic:updated' => 'La tarea ha sido actualizada.',
	'discussion:topic:deleted' => 'La tarea ha sido borrada.',

	'discussion:topic:notfound' => 'No se ha encontrado el tema de discusi&oacute;n.',
	'discussion:error:notsaved' => 'No se puede guardar el tema de discusi&oacute;n',
	'discussion:error:missing' => 'Los campos de t&iacute;tulo, contenido, Fecha y Hora de Cierre son obligatorios',
	'discussion:error:permissions' => 'No tiene permiso para hacer eso',
	'discussion:error:notdeleted' => 'No se pudo borrar el tema de discusi&oacute;n',

	'discussion:reply:deleted' => 'La respuesta ha sido borrada.',
	'discussion:reply:error:notdeleted' => 'No se pudo borrar la respuesta',

	'reply:this' => 'Responder a esto',

	'group:replies' => 'Tareas Enviadas',
	'groups:forum:created' => 'Cre&oaucte; %s con %d comentarios',
	'groups:forum:created:single' => 'creado %s con %d respuestas',
	'groups:forum' => 'Discusi&oacute;n',
	'groups:addtopic' => 'Agregar una tarea',
	'groups:forumlatest' => '&Uacute;ltima discusi&oacute;n',
	'groups:latestdiscussion' => '&Uacute;ltimas discusiones',
	'groups:newest' => 'M&aacute;s reciente',
	'groups:popular' => 'Popular',
	'groupspost:success' => 'Tu respuesta ha sido publicada',
	'groups:alldiscussion' => '&Uacute;ltima discusi&oacute;n',
	'groups:edittopic' => 'Editar tarea',
	'groups:topicmessage' => 'Descripcion de la Tarea',
	'groups:topicstatus' => 'Estado de la tarea',
	'groups:reply' => 'Publicar un comentario',
	'groups:topic' => 'Tarea',
	'groups:posts' => 'Publicaciones',
	'groups:lastperson' => '&Uacute;ltimo usuario',
	'groups:when' => 'Cuando',
	'grouptopic:notcreated' => 'No hay tareas creadas.',
	'groups:topicopen' => 'Abierto',
	'groups:topicclosed' => 'Cerrado',
	'groups:topicresolved' => 'Resuelto',
	'grouptopic:created' => 'Tu tema ha sido creado.',
	'groupstopic:deleted' => 'El tema ha sido eliminado.',
	'groups:topicsticky' => 'Permanente',
	'groups:topicisclosed' => 'La tarea ya est&aacute; cerrada. No se aceptan envios',
	'groups:topiccloseddesc' => 'Esta tarea est&aacute; cerrado y no acepta nuevos envios.',
	'grouptopic:error' => 'La clase no pudo ser creada. Por favor intenta de nuevo o contacta con el administrador.',
	'groups:forumpost:edited' => "Has editado la entrada exitosamente.",
	'groups:forumpost:error' => "Hubo un problema al editar la entrada.",


	'groups:privategroup' => 'Este es una clase privado. Debe solicitar membres&iacute;a.',
	'groups:notitle' => 'La clase debe tener un t&iacute;tulo',
	'groups:cantjoin' => 'No se puedo unir a la clase',
	'groups:cantleave' => 'No se pudo abandonar el grupo',
	'groups:removeuser' => 'Remover de la clase',
	'groups:cantremove' => 'No se puede remover este usuario del grupo',
	'groups:removed' => 'El usuario %s ha sido removido del grupo',
	'groups:addedtogroup' => 'El usuario ha sido agregado con &eacute;xito',
	'groups:joinrequestnotmade' => 'No se pudo enviar la solicitud de membres&iacute;a del grupo',
	'groups:joinrequestmade' => 'Ha solicitado unirse al grupo',
	'groups:joined' => 'Se ha unido al grupo',
	'groups:left' => 'Ha abandonado el grupo',
	'groups:notowner' => 'No es el propietario del grupo.',
	'groups:notmember' => 'No es miembro de este grupo.',
	'groups:alreadymember' => 'Ya es miembro de este grupo',
	'groups:userinvited' => 'El usuario ha sido invitado.',
	'groups:usernotinvited' => 'El usuario no pudo ser invitado.',
	'groups:useralreadyinvited' => 'El usuario ya ha sido invitado',
	'groups:invite:subject' => "%s le ha invitado al grupo %s",
	'groups:updated' => "&Uacute;ltima respuesta por %s %s",
	'groups:started' => "Iniciado por %s",
	'groups:joinrequest:remove:check' => '&iquest;Seguro que desea cancelar esta solicitud de membres&iacute;a?',
	'groups:invite:remove:check' => '&iquest;Seguro que desea anular esta invitaci&oacute;n?',
	'groups:invite:body' => "Hola %s,

%s le ha invitado para que se una al grupo '%s'. Haga click en el siguiente enlace para aceptar la invitaci&oacute;n:

%s",

	'groups:welcome:subject' => "Bienvenido al grupo %s",
	'groups:welcome:body' => "Hola %s!

Ahora es miembro del grupo '%s'. Haga click en el siguiente enlace para comenzar a participar:

%s",

	'groups:request:subject' => "%s ha solicitado unirse al grupo %s",
	'groups:request:body' => "Hola %s,

%s ha solicitado unirse al grupo '%s'. Haga click en el siguiente enlace para ver su perfil:

%s

O click a continuaci&oacute;n para ver todas las solicitudes de membres&iacute;a del grupo:

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => '%s ha creado el grupo %s',
	'river:join:group:default' => '%s se ha unido al grupo %s',
	'river:create:object:groupforumtopic' => '%s abri&oacute; el tema %s',
	'river:reply:object:groupforumtopic' => '%s ha respondido en el tema %s',
	
	'groups:nowidgets' => 'No se han definido widgets para el grupo.',


	'groups:widgets:members:title' => 'Miembros del grupo',
	'groups:widgets:members:description' => 'Despliega los miembros del grupo.',
	'groups:widgets:members:label:displaynum' => 'Despliega los miembros de un grupo.',
	'groups:widgets:members:label:pleaseedit' => 'Por favor configure este widget.',

	'groups:widgets:entities:title' => "Objetos en el grupo",
	'groups:widgets:entities:description' => "Despliega los objetos guardados en este grupo",
	'groups:widgets:entities:label:displaynum' => 'Despliega los objetos de este grupo.',
	'groups:widgets:entities:label:pleaseedit' => 'Por favor configure este widget.',

	'groups:forumtopic:edited' => 'Tema de discusi&oacute;n editado con &eacute;xito.',

	'groups:allowhiddengroups' => '&iquest;Desea habilitar los grupos privados (invisibles)?',
	'groups:whocancreate' => '&iquest;Qui&eacute;n puede crear nuevos grupos?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Grupo y contenidos borrados',
	'group:notdeleted' => 'El grupo no pudo ser borrado',

	'group:notfound' => 'No se pudo encontrar el grupo',
	'grouppost:deleted' => 'Publicaci&oacute;n del grupo borrada con &eacute;xito',
	'grouppost:notdeleted' => 'La publicaci&oacute;n del grupo no se pudo borrar',
	'groupstopic:deleted' => 'Tema borrado',
	'groupstopic:notdeleted' => 'No se pudo borrar el tema',
	'grouptopic:blank' => 'No hay temas',
	'grouptopic:notfound' => 'No se pude encontrar el tema solicitado',
	'grouppost:nopost' => 'Publicaci&oaucte;n vac&iacute;a',
	'groups:deletewarning' => "&iquest;Seguro que desea borrar este grupo? Esta acci&oacute;n no se puede deshacer",

	'groups:invitekilled' => 'La invitaci&oacute;n ha sido eliminada.',
	'groups:joinrequestkilled' => 'La solicitud ha sido eliminada.',

	// ecml
	'groups:ecml:discussion' => 'Discusi&oacute;nes de grupos',
	'groups:ecml:groupprofile' => 'Perfiles de grupos',

);

add_translation("es", $spanish);

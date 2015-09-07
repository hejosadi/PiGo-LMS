<?php

/**
 * Elgg invite spanish language file
 * Formal spanish version by LeonardoA
 * 
 * @package ElggInviteFriends
 */

$spanish = array(

	'friends:invite' => 'Invitar amigos',
	
	'invitefriends:registration_disabled' => 'El registro de nuevos usuarios ha sido deshabilitado, no puede enviar invitaciones.',
	
	'invitefriends:introduction' => 'Para enviar invitaciones, ingrese a continuaci&oacute;n las direcciones de e-mail (una por linea):',
	'invitefriends:message' => 'Puede incluir un mensaje en la invitaci&oacute;n:',
	'invitefriends:subject' => 'Invitaci&oacute;n para %s',

	'invitefriends:success' => 'Se han enviado las invitaciones.',
	'invitefriends:invitations_sent' => 'Invitaciones enviadas: %s. Encontramos los siguientes problemas:',
	'invitefriends:email_error' => 'La siguiente direcci&oacute;n de e-mail no es v&aacute;lida: %s',
	'invitefriends:already_members' => 'Este e-mail ya esta registrado: %s',
	'invitefriends:noemails' => 'No se han ingresado direcciones de e-mail.',
	
	'invitefriends:message:default' => '
Hola,

Quisiera invitarte a %s.',

	'invitefriends:email' => '
Ha sido invitado a %s por %s. La invitaci&oacute;n incluye el siguiente mensaje:

%s

Para unirse, haga click en el siguiente enlace:

%s

Ser&aacute; automaticamente agregado como amigo cuando cree su cuenta.',
	
	);
					
add_translation("es", $spanish);
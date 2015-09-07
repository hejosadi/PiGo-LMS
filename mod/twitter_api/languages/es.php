<?php
/**
 * An spanish language definition file
 * Formal spanish version by LeonardoA
 */

$spanish = array(
	'twitter_api' => 'Servicios de Twitter',

	'twitter_api:requires_oauth' => 'Los servicios de Twitter requieren que el plugin de la biblioteca OAuth Librares est&eacute; habilitada.',

	'twitter_api:consumer_key' => 'Clave p&uacute;blica',
	'twitter_api:consumer_secret' => 'Clave privada',

	'twitter_api:settings:instructions' => 'Debe obtener una clave p&uacute;blica y privada en <a href="https://dev.twitter.com/apps/new" target="_blank">Twitter</a>. Llene el formulario para la nueva aplicaci&oacute;n. Seleccione lectura y escritura para el tipo de acceso. La URL de callback es %stwitter_api/authorize',

	'twitter_api:usersettings:description' => "Enlace su cuenta de %s con Twitter.",
	'twitter_api:usersettings:request' => "Primero debe <a href=\"%s\">autorizar</a> a %s para acceder a su cuenta de Twitter.",
	'twitter_api:usersettings:cannot_revoke' => "No puede desenlazar tu cuenta con Twitter debido a que no ha provisto una direcci&oacute;n de e-mail y contrase&ntilde;a. <a href=\"%s\">Proveer una ahora</a>.",
	'twitter_api:authorize:error' => 'No se pudo autorizar a Twitter.',
	'twitter_api:authorize:success' => 'El acceso a Twitter ha sido autorizado.',

	'twitter_api:usersettings:authorized' => "Ha autorizado a %s para acceder a su cuenta de Twitter: @%s.",
	'twitter_api:usersettings:revoke' => 'Haga click <a href="%s">aqu&iacute;</a> para revocar la autorizaci&oacute;n.',
	'twitter_api:usersettings:site_not_configured' => 'Un administrador debe configurar el widget de Twitter para que se pueda utilizar.',

	'twitter_api:revoke:success' => 'El acceso a Twitter ha sido revocado.',

	'twitter_api:post_to_twitter' => "&iquest;Enviar sus notas a Twitter?",
	
	'twitter_api:login' => '&iquest;Permitir a los usuarios existentes que han vinculado su cuenta de Twitter para iniciar sesi&oacute;n con sus credenciales de Twitter?',
	'twitter_api:new_users' => '&iquest;Permitir a usuarios nuevos inscribirse con su cuenta de Twitter, incluso si el registro de nuevos usuarios est&aacute; desactivado?',
	'twitter_api:login:success' => 'Ha ingresado.',
	'twitter_api:login:error' => 'No puede iniciar sesi&oacute;n con Twitter.',
	'twitter_api:login:email' => "Debe ingresar una direcci&oacute;n de e-mail v&aacute;lida para su cuenta %s.",

	'twitter_api:invalid_page' => 'P&aacute;gina inv&aacute;lida',

	'twitter_api:deprecated_callback_url' => 'La direcci&oacute;n URL de devolución de llamada para la API de Twitter ha cambiado a %s.  Por favor solicite al administrador actualizarla.',

	'twitter_api:interstitial:settings' => 'Configuraci&oacute;n',
	'twitter_api:interstitial:description' => 'Est&aacute; casi listo para ingresar a %s! Necesitamos algunos detalles adicionales antes de continuar, &eacute;stos son opcionales, pero le permitir&aacute;n iniciar sesi&oacuten si es imposible utilizar sus credenciales de Twitter o si decide desvincular su cuenta en el futuro.',

	'twitter_api:interstitial:username' => 'Este es su nombre de usuario. No puede ser cambiado. Si configura una contrase&ntilde;a, puede usar su nombre de usuario o e-mail para iniciar sesi&oacute;n.',

	'twitter_api:interstitial:name' => 'Este es el nombre con el que otros usuarios lo identificar&aacute;n.',

	'twitter_api:interstitial:email' => 'Su direcci&oacute;n de e-mail. &Eacute;sta no ser&aacute; vista por los dem&aacute;s usuarios.',

	'twitter_api:interstitial:password' => 'Una contrase&ntilde;a para ingresar si no es posible utilizar sus credenciales de Twitter.',
	'twitter_api:interstitial:password2' => 'Repita la contrase&ntilde;a.',

	'twitter_api:interstitial:no_thanks' => 'No gracias',

	'twitter_api:interstitial:no_display_name' => 'Debe tener un nombre para mostrar.',
	'twitter_api:interstitial:invalid_email' => 'Debe ingresar una direcci&oacute;n de e-mail v&aacute;lida o dejar en blanco.',
	'twitter_api:interstitial:existing_email' => 'Esta direcci&oacute;n de e-mail ya est6aacute; registrada.',
	'twitter_api:interstitial:password_mismatch' => 'Las contrase&ntilde;as no coinciden.',
	'twitter_api:interstitial:cannot_save' => 'No pudimos guardar los detalles de la cuenta.',
	'twitter_api:interstitial:saved' => 'Detalles de la cuenta guardados',
);

add_translation('es', $spanish);
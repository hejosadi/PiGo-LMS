<?php
/**
 * Email user validation plugin spanish language pack.
 * Formal spanish version by LeonardoA
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$spanish = array(
	'admin:users:unvalidated' => 'Sin validar',
	
	'email:validate:subject' => "%s por favor confirme su dirección de e-mail para %s!",
	'email:validate:body' => "%s,

Antes de comenzar a usar %s, debe confirmar su dirección de e-mail.

Por favor confirme su registro a trav&eacute;s del siguiente enlace:

%s

Si no puede hacer click en el enlace, copie y pegue la direcci&oacute;n URL en su navegador.

%s
%s
",
	'email:confirm:success' => "Ha confirmado su direcci&oacute;n de e-mail!",
	'email:confirm:fail' => "Su direcci&oacute;n de e-mail no pudo ser verificada...",

	'uservalidationbyemail:registerok' => "Para activar su cuenta, por favor confirme su dirección de e-mail a trav&eacute;s del enlace que se le ha enviado.",
	'uservalidationbyemail:login:fail' => "Su cuenta no ha sido validada por tanto su ingreso fall&oacute;. Se ha enviado otro correo de confirmaci&oacute;n.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'No hay usuarios sin validar.',

	'uservalidationbyemail:admin:unvalidated' => 'Sin validar',
	'uservalidationbyemail:admin:user_created' => '%s ha sido registrado',
	'uservalidationbyemail:admin:resend_validation' => 'Reenviar correo de validaci&oacute;n',
	'uservalidationbyemail:admin:validate' => 'Validar',
	'uservalidationbyemail:admin:delete' => 'Borrar',
	'uservalidationbyemail:confirm_validate_user' => '&iquest;Validar a %s?',
	'uservalidationbyemail:confirm_resend_validation' => '&iquest;Reenviar e-mail de confirmaci&oacute;n a %s?',
	'uservalidationbyemail:confirm_delete' => '&iquest;borrar %s?',
	'uservalidationbyemail:confirm_validate_checked' => '&iquest;Validar a los usuarios seleccionados?',
	'uservalidationbyemail:confirm_resend_validation_checked' => '&iquest;Reenviar e.mail de validaci&oacute;n a los usuarios seleccionados?',
	'uservalidationbyemail:confirm_delete_checked' => '&iquest;Borrar a los usuarios seleccionados?',
	'uservalidationbyemail:check_all' => 'All',

	'uservalidationbyemail:errors:unknown_users' => 'Uusarios desconocidos',
	'uservalidationbyemail:errors:could_not_validate_user' => 'No se pudo validar al usuario.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'No se pudo validar a los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'No se pudo borrar el usuario.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'No se pudo borrar a los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'No se pudo reenviar el e-mail de validaci&oacute;n.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'No se pudo reenviar el e-mail de validaci&oacute;n a los usuarios seleccionados.',

	'uservalidationbyemail:messages:validated_user' => 'Usuario validado.',
	'uservalidationbyemail:messages:validated_users' => 'Todos los usuarios seleccionados han sido validados.',
	'uservalidationbyemail:messages:deleted_user' => 'Usuario eliminado.',
	'uservalidationbyemail:messages:deleted_users' => 'Todos los usuarios seleccionados han sido eliminados.',
	'uservalidationbyemail:messages:resent_validation' => 'Solicitud de validaci&oacute;n reenviada.',
	'uservalidationbyemail:messages:resent_validations' => 'Solicitud de validaci&oacute;n reenviada a todos los usuarios seleccionados.'

);

add_translation("es", $spanish);
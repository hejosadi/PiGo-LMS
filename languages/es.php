<?php
/**	
 * Core Spanish Language
 * @package Elgg.Core
 * @subpackage Languages.Spanish
 * Formal spanish version 1.8.16 by LeonardoA
 */
 
$spanish = array(
/**
 * Sites
 */
  
	'item:site' => 'Sitios',
 
/**
 * Sessions
 */

	'login' => "Ingresar",
	'loginok' => "Bienvenido",
	'loginerror' => "Informaci&oacute;n incorrecta. Verifique sus credenciales e intente nuevamente",
	'login:empty' => "El nombre de usuario y contrase&ntilde;a son obligatorios",
	'login:baduser' => "No se puede ingresar a su cuenta de usuario",
	'auth:nopams' => "Error interno. No se encuentra un m&eacute;todo de autenticaci&oacute;n instalado",

	'logout' => "Cerrar la sesi&oacute;n",
	'logoutok' => "Se ha cerrado la sesi&oacute;n",
	'logouterror' => "No se pudo cerrar la sesi&oacute;n, por favor intente nuevamente",

	'loggedinrequired' 	=> "Debe ingresar para poder ver esta p&aacute;gina",
	'adminrequired' 	=> "Debe ser administrador para poder ver esta p&aacute;gina",
	'membershiprequired' => "Debe ser miembro del grupo para poder ver esta p&aacute;gina",
 
 
/**
 * Errors
 */
	'exception:title' 	=> "Error Fatal",
	'exception:contact_admin' => 'Se ha encontrado un error fatal al ingresar. Contacte al administrador con la siguiente informaci&oacute;n:',

	'actionundefined' 	=> "La acci&oacute;n (%s) solicitada no se encuentra definida en el sistema",
	'actionnotfound' 	=> "El log de acciones para %s no se ha encontrado",
	'actionloggedout' 	=> "Lo sentimos, no puede realizar esta acci&oacute;n sin ingresar",
	'actionunauthorized' => 'Usted no posee los permisos necesarios para realizar esta acci&oacute;n',

	'InstallationException:SiteNotInstalled' => 'No se pudo procesar la solicitud. El sitio '
		. ' no se encuentra configurado o la base de datos se encuentra ca&iacute;da',
	'InstallationException:MissingLibrary' => 'No se pudo cargar %s',
	'InstallationException:CannotLoadSettings' => 'No se pudo cargar el archivo de configuracion, puede que no exista o que se deba a un error de configuraci&oacute;n de permisos',

	'SecurityException:Codeblock' => "Acceso denegado para la ejecuci&oacute;n de bloque de c&oacute;digo privilegiado",
	'DatabaseException:WrongCredentials' => "No se pudo conectar a la base de datos con las credenciales provistas. Verifique el archivo de configuraci&oacute;n",
	'DatabaseException:NoConnect' => "No se puede consultar la base de datos '%s', por favor verifique que dicha base de datos exista y que posea permisos sobre la misma",
	'SecurityException:FunctionDenied' => "Acceso denegado a la funci&oacute;n privilegiada '%s'",
	'DatabaseException:DBSetupIssues' => "Se encontraron los siguientes errores: ",
	'DatabaseException:ScriptNotFound' => "No se pudo encontrar el script de base de datos %s",
	'DatabaseException:InvalidQuery' => "Consulta inv&aacute;lida",
	'DatabaseException:InvalidDBLink' => "Se perdi&oacute; la conexi&oacute;n a la BD.",

	'IOException:FailedToLoadGUID' => "Error al cargar una nueva %s de GUID: %d",
	'InvalidParameterException:NonElggObject' => "Pasando un Objeto no-Elgg a un constructor Elgg!",
	'InvalidParameterException:UnrecognisedValue' => "No se reconoce el valor enviado al constructor",

	'InvalidClassException:NotValidElggStar' => "GUID: %d no es un %s v&aacute;lido",

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) es un plugin desconfigurado que ha sido deshabilitado. Por favor revise la Wiki de Elgg para m&aacute;s informaci&oacute;n (http://docs.elgg.org/wiki/)",
	'PluginException:CannotStart' => '%s (guid: %s) no puede iniciarse. Motivo: %s',
	'PluginException:InvalidID' => "%s no es un ID de plugin v&aacute;lido",
	'PluginException:InvalidPath' => "%s es un path de plugin inv&aacute;lido",
	'PluginException:InvalidManifest' => 'Archivo de manifesto inv&aacute;lido para el plugin %s',
	'PluginException:InvalidPlugin' => '%s es un plugin no v&aacute;lido',
	'PluginException:InvalidPlugin:Details' => '%s es un plugin no v&aacute;lido: %s',
	'PluginException:NullInstantiated' => 'ElggPlugin no instanciado. Debe proveer un GUID, un ID de plugin o la ruta completa.',

	'ElggPlugin:MissingID' => 'No se encuentra el ID del plugin (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'ElggPluginPackage faltante para el plugin con ID %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Archivo %s faltante en el package',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Tipo de dependencia "%s" no v&aacute;lida',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Tipo "%s" provisto no v&aacute;lido',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Dependencia %s no v&aacute;lida "%s" en plugin %s. Los plugins no pueden entrar en conflicto con otros requeridos.',

	'ElggPlugin:Exception:CannotIncludeFile' => 'No puede incluirse %s para el plugin %s (guid: %s) en %s. Verifique los permisos.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'No puede cargarse el directorio "views" para el plugin %s (guid: %s) en %s. Verifique los permisos.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'No pueden registrarse lenguajes para el plugin %s (guid: %s) en %s.  Verifique los permisos.',
	'ElggPlugin:Exception:NoID' => 'No se encontr&oacute; el ID para el plugin con guid %s.',

	'PluginException:ParserError' => 'Error procesando el manifiesto con versi&oacute;n de API %s en plugin %s',
	'PluginException:NoAvailableParser' => 'No se encuentra un procesador para el manifiesto de la versi&oacute;n de la API %s en plugin %s',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Atributo '%s' faltante en manifiesto del plugin %s",

	'ElggPlugin:Dependencies:Requires' => 'Requiere',
	'ElggPlugin:Dependencies:Suggests' => 'Sugiere',
	'ElggPlugin:Dependencies:Conflicts' => 'Conflictos',
	'ElggPlugin:Dependencies:Conflicted' => 'En conflicto',
	'ElggPlugin:Dependencies:Provides' => 'Provee',
	'ElggPlugin:Dependencies:Priority' => 'Prioridad',

	'ElggPlugin:Dependencies:Elgg' => 'Versi&oacute;n de Elgg',
	'ElggPlugin:Dependencies:PhpExtension' => 'Extensi&oacute;n PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'Configuraci&oacute;n PHP ini: %s',
 	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Despu&eacute;s %s',
	'ElggPlugin:Dependencies:Priority:Before' => '&Aacute;ntes %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s no esta instalado',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'No se encuentra',
	
	'ElggPlugin:InvalidAndDeactivated' => '%s no es un plugin v&aacute;lido y se ha deshabilitado',	

	'InvalidParameterException:NonElggUser' => "Pasando un no-ElggUser a un constructor ElggUser.",

	'InvalidParameterException:NonElggSite' => "Pasando un no-ElggSite a un constructor ElggSite.",

	'InvalidParameterException:NonElggGroup' => "Pasando un no-ElggGroup a un constructor ElggGroup.",

	'IOException:UnableToSaveNew' => "No se pudo guardar un nuevo %s",

	'InvalidParameterException:GUIDNotForExport' => "No se ha especificado un GUID durante la exportaci&oacute;n, esto no deber&iacute;a ocurrir",
	'InvalidParameterException:NonArrayReturnValue' => "Funci&oacute;n de serializaci&oacute;n de entidad pasada a un par&aacute;metro de retorno no-array",

	'ConfigurationException:NoCachePath' => "Path de Cache seteado en Null!",
	'IOException:NotDirectory' => "%s no es un directorio",

	'IOException:BaseEntitySaveFailed' => "No se pudo guardar una nueva entidad!",
	'InvalidParameterException:UnexpectedODDClass' => "import() pasado a una clase ODD inesperado",
	'InvalidParameterException:EntityTypeNotSet' => "Debe setearse el tipo de entidad",

	'ClassException:ClassnameNotClass' => "%s no es un %s",
	'ClassNotFoundException:MissingClass' => "Clase '%s' no encontrada, hay alg&uacute;n plugin faltante?",
	'InstallationException:TypeNotSupported' => "No se reconoce el tipo %s. Esto indica un error en la instalaci&oacute;n, seguramente causado por una actualizaci&oacute;n incompleta",

	'ImportException:ImportFailed' => "No pudo importarse el elemento %d",
	'ImportException:ProblemSaving' => "Se encontr&oacute; un problema al guardar %s",
	'ImportException:NoGUID' => "Se cre&oacute; una nueva entidad sin GUID, esto no debe ocurrir",

	'ImportException:GUIDNotFound' => "No se pudo encontrar la entidad '%d'",
	'ImportException:ProblemUpdatingMeta' => "Ocurri&oacute; un error al actualizar '%s' en la entidad '%d'",

	'ExportException:NoSuchEntity' => "GUID de entidad inv&aacute;lido: %d",

	'ImportException:NoODDElements' => "No se encontraron elementos OpenDD para la importaci&oacute;n, la importaci&oacute;n ha fallado",
	'ImportException:NotAllImported' => "No se importaron todos los elementos",

	'InvalidParameterException:UnrecognisedFileMode' => "Modo de archivo '%s' no reconocido",
	'InvalidParameterException:MissingOwner' => "El archivo %s (guid: %d) (guid del due&ntilde;o: %d) no tiene un due&ntilde;o!",
	'IOException:CouldNotMake' => "No puede realizarse %s",
	'IOException:MissingFileName' => "Debe especificar un nombre antes de abrir un archivo",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "No pudo cargarse la clase de repositorio %s para el archivo %u",
	'NotificationException:NoNotificationMethod' => "No se especific&oacute; un m&eacute;todo de notificaci&oacute;n",
	'NotificationException:NoHandlerFound' => "No se encuentra un controlador '%s' o no es ejecutable",
	'NotificationException:ErrorNotifyingGuid' => "Ocurri&oacute; un error al notificar %d",
	'NotificationException:NoEmailAddress' => "No pudo cargarse la direcci&oacute;n de E-mail para el GUID:%d",
	'NotificationException:MissingParameter' => "Par&aacute;metro requerido faltante: '%s'",

	'DatabaseException:WhereSetNonQuery' => "Donde no contenga WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Campos faltantes en el estilo de consulta",
	'DatabaseException:UnspecifiedQueryType' => "Tipo de consulta no reconocido o no especificado",
	'DatabaseException:NoTablesSpecified' => "No se especificaron las tablas para la consulta",
	'DatabaseException:NoACL' => "No se especific&oacute; el control de acceso en la consulta",

	'InvalidParameterException:NoEntityFound' => "No se encuentra la entidad, puede que esta no exista o que no tenga los permisos necesarios sobre ella",

	'InvalidParameterException:GUIDNotFound' => "No se pudo encontrar el GUID: %s, o no tiene acceso a ella",
	'InvalidParameterException:IdNotExistForGUID' => "Lo sentimos, '%s' no existe para el guid: %d",
	'InvalidParameterException:CanNotExportType' => "Lo sentimos, no se encuentra implementada la exportaci&oacute;n de '%s'",
	'InvalidParameterException:NoDataFound' => "No se encontraron resultados",
	'InvalidParameterException:DoesNotBelong' => "No pertenece a la entidad",
	'InvalidParameterException:DoesNotBelongOrRefer' => "No pertenece o se refiere a la entidad",
	'InvalidParameterException:MissingParameter' => "Par&aacute;metro faltante, debe proveer un GUID",
	'InvalidParameterException:LibraryNotRegistered' => '%s no es una librer&iacute;a registrada',
	'InvalidParameterException:LibraryNotFound' => 'No se pudo cargar la librer&iacute;a %s de %s',

	'APIException:ApiResultUnknown' => "Los resultados de la API no son conocidos, esto no debe ocurrir",
	'ConfigurationException:NoSiteID' => "No se especific&oacute; un ID del sitio",
	'SecurityException:APIAccessDenied' => "Lo sentimos, el acceso a la API ha sido deshabilitado para el administrador",
	'SecurityException:NoAuthMethods' => "No se encontraron m&eacute;todos de autenticaci&oacute;n para procesar la solicitud",
	'SecurityException:ForwardFailedToRedirect' => 'No es posible redirigir debido a encabezados en env&iacute;o. Deteniendo ejecuci&oacute;n por seguridad. Registro de salida en archivo %s en linea %d.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "M&eacute;todo o funci&oacute;n no especificado en el llamado a expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Estructuras de Array son inv&aacute;lidas en llamados a la funci&oacute;n '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "M&eacute;todo http %s no reconocido para el m&eacute;todo '%s' de la API",
	'APIException:MissingParameterInMethod' => "Par&aacute;metro %s faltante en m&eacute;todo %s",
	'APIException:ParameterNotArray' => "%s no es un Array",
	'APIException:UnrecognisedTypeCast' => "Tipo no reconocido en casteo %s para la variable '%s' en el m&eacute;todo '%s'",
	'APIException:InvalidParameter' => "Se encontr&oacute; un par&aacute;metro inv&aacute;lido para '%s' en el m&eacute;todo '%s'",
	'APIException:FunctionParseError' => "%s(%s) posee un error de procesamiento",
	'APIException:FunctionNoReturn' => "%s(%s) no retorn&oacute; ning&uacute;n valor",
	'APIException:APIAuthenticationFailed' => "El llamado al m&eacute;todo fall&oacute; en la autenticaci&oacute;n de la API",
	'APIException:UserAuthenticationFailed' => "El llamado al m&eacute;todo fall&oacute; en la autenticaci&oacute;n del usuario",
	'SecurityException:AuthTokenExpired' => "El token de autenticaci&oacute;n no se encuentra o bien se encuentra expirado",
	'CallException:InvalidCallMethod' => "%s debe llamarse utilizando '%s'",
	'APIException:MethodCallNotImplemented' => "La llamada al m&eacute;todo '%s' no se encuentra implementada",
	'APIException:FunctionDoesNotExist' => "La funci&oacute;n para el m&eacute;todo '%s' no es ejecutable",
	'APIException:AlgorithmNotSupported' => "No se soporta o se ha deshabilitado el algoritmo '%s'",
	'ConfigurationException:CacheDirNotSet' => "Directorio de Cache 'cache_path' no establecido",
	'APIException:NotGetOrPost' => "El m&eacute;todo de Request debe ser GET o POST",
	'APIException:MissingAPIKey' => "Clave API faltante",
	'APIException:BadAPIKey' => "Clave API incorrecta",
	'APIException:MissingHmac' => "Encabezado X-Elgg-hmac faltante",
	'APIException:MissingHmacAlgo' => "Encabezado X-Elgg-hmac-algo faltante",
	'APIException:MissingTime' => "Encabezado X-Elgg-time faltante",
	'APIException:MissingNonce' => "Encabezado X-Elgg-nonce faltante",
	'APIException:TemporalDrift' => "X-Elgg-time es muy lejano en el pasado o en el futuro. Fallo Epoch",
	'APIException:NoQueryString' => "No hay datos en la query string",
	'APIException:MissingPOSTHash' => "Encabezado X-Elgg-posthash faltante",
	'APIException:MissingPOSTAlgo' => "Encabezado X-Elgg-posthash_algo faltante",
	'APIException:MissingContentType' => "Content type faltante para post data",
	'SecurityException:InvalidPostHash' => "Hash de POST data inv&aacute;lido - Se esperaba %s pero se recibi&oacute; %s",
	'SecurityException:DupePacket' => "Firma de paquete ya vista",
	'SecurityException:InvalidAPIKey' => "Clave API inv&aacute;lida o faltante",
	'NotImplementedException:CallMethodNotImplemented' => "El llamado al m&eacute;todo '%s' no es soportado",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "Llamado al m&eacute;todo XML-RPC '%s' no implementada",
	'InvalidParameterException:UnexpectedReturnFormat' => "La llamada al m&eacute;todo '%s' devolvi&oacute; un resultado inesperado",
	'CallException:NotRPCCall' => "La llamada no parece ser una llamada XML-RPC v&aacute;lida",

	'PluginException:NoPluginName' => "No se pudo encontrar el nombre del plugin",

	'SecurityException:authenticationfailed' => "No se pudo autenticar el usuario",

	'CronException:unknownperiod' => '%s no es un per&iacute;odo reconocible.',

	'SecurityException:deletedisablecurrentsite' => 'No puede eliminar o deshabilitar el sitio que est&aacute; viendo en este momento!',

	'RegistrationException:EmptyPassword' => 'Los campos de contrase&ntilde;as son obligatorios',
	'RegistrationException:PasswordMismatch' => 'Las contrase&ntilde;as deben coincidir',
	'LoginException:BannedUser' => 'Su ingreso ha sido bloqueado moment&aacute;neamente',
	'LoginException:UsernameFailure' => 'No pudo iniciarse la sesi&oacute;n. Por favor verifique su nombre de usuario',
	'LoginException:PasswordFailure' => 'No pudo iniciarse la sesi&oacute;n. Por favor verifique su contrase&ntilde;a',
	'LoginException:AccountLocked' => 'Su cuenta ha sido bloqueada por la cantidad de intentos fallidos de inicio de sesion',
	'LoginException:ChangePasswordFailure' => 'Fall&oacute; el cambio de contrase&ntilde;a. Revise ambas contrase&ntilde;as.',
	'LoginException:Unknown' => 'No pudo iniciarse la sesi&oacute;n. Error desconocido.',

	'deprecatedfunction' => 'Precauci&oacute;n: Este c&oacute;digo utiliza la funci&oacute;n obsoleta \'%s\' que no es compatible con esta versi&oacute;n de Elgg',

	'pageownerunavailable' => 'Precauci&oacute;n: El administrador de p&aacute;gina %d no se encuentra accesible!',
	'viewfailure' => 'Ocurri&oacute; un error interno en la vista %s',
	'changebookmark' => 'Por favor modifique su &iacute;ndice para esta vista',
	'noaccess' => 'El contenido no es accesible debido a que necesita haber iniciado sesi&oacute;n, fu&eacute; removido o no tiene permiso para verlo.',
	'error:missing_data' => 'Faltan datos en su solicitud',
	
	'error:default' => 'Algo anda mal...',
	'error:404' => 'No se encontr&oacute; la p&aacute;gina o aplicaci&oacute;n solicitada.',
	
 /**
  * API
  */
	'system.api.list' => "Lista todas las llamadas API disponibles en el sistema",
	'auth.gettoken' => "Esta llamada API le permite al usuario obtener un token de autenticaci&oacute;n el cual puede ser utilizado para autenticar futuras llamadas a la API. Enviarlo como par&aacute;metro auth_token",
 
 /**
  * User details
  */

	'name' => "Nombre en el Sitio",
	'email' => "Direcci&oacute;n de E-mail",
	'username' => "Nombre de usuario",
	'loginusername' => "Nombre de usuario o E-mail",
	'password' => "Contrase&ntilde;a",
	'passwordagain' => "Contrase&ntilde;a (nuevamente, para verificaci&oacute;n)",
	'admin_option' => "&iquest;Hacer administrador a este usuario?",
 
 /**
  * Access
  */
  
	'PRIVATE' => "Privado",
	'LOGGED_IN' => "Usuarios registrados",
	'PUBLIC' => 'Publico',
	'access:friends:label' => "Amigos",
	'access' => "Nivel de seguridad de publicaci&oacute;n",
	'access:limited:label' => "Limitado",
	'access:help' => "El nivel de seguridad de publicaci&oacute;n",
	
 /**
  * Dashboard and widgets
  */
  
	'dashboard' => "Inicio",
	'dashboard:nowidgets' => " ",
 
	'widgets:add' => 'Agregar widget',
	'widgets:add:description' => "Haga click en el bot&oacute;n de alg&uacute;n widget para agregarlo a la p&aacute;gina",
	'widgets:position:fixed' => '(Posici&oacute;n fija en la p&aacute;gina)',
	'widget:unavailable' => 'Ya agreg&oacute; este widget',
	'widget:numbertodisplay' => 'Cantidad de elementos para mostrar',
 
	'widget:delete' => 'Quitar %s',
	'widget:edit' => 'Personalizar este widget',
 
 	'widgets' => "Widgets",
 	'widget' => "Widget",
 	'item:object:widget' => "Widgets",
	'widgets:save:success' => "El widget se guard&oacute; correctamente",
	'widgets:save:failure' => "No se pudo guardar el widget, por favor intente nuevamente",
	'widgets:add:success' => "Se agreg&oacute; correctamente el widget",
	'widgets:add:failure' => "No se pudo a&ntilde;adir el widget",
	'widgets:move:failure' => "No se pudo guardar la nueva posici&oacute;n del widget",
	'widgets:remove:failure' => "No se pudo quitar el widget",
 
 /**
  * Groups
  */
  
	'group' => "Clase",
	'item:group' => "Clases",
 
 /**
  * Users
  */
  
	'user' => "Usuario",
	'item:user' => "Usuarios",
 
 /**
  * Friends
  */

	'friends' => "Amigos",
	'friends:yours' => "Sus Amigos",
	'friends:owned' => "Amigos de %s",
	'friend:add' => "A&ntilde;adir como amigo",
	'friend:remove' => "Quitar amigo",

	'friends:add:successful' => "Se ha a&ntilde;adido a %s como amigo",
	'friends:add:failure' => "No se pudo a&ntilde;adir a %s como amigo. Por favor intente nuevamente",

	'friends:remove:successful' => "Se quit&oacute; a %s de sus amigos",
	'friends:remove:failure' => "No se pudo quitar a %s de sus amigos. Por favor intente nuevamente",

	'friends:none' => "A&utilde;n no tiene amigos",
	'friends:none:you' => "No tiene amigos a&uacute;n",

	'friends:none:found' => "No se encontraron amigos",

	'friends:of:none' => "Nadie ha agregado a este usuario como amigo a&uacute;n",
	'friends:of:none:you' => "Nadie le ha agregado como amigo a&uacute;n. Comience a a&ntilde;adir contenido y complete su perfil para que la gente le encuentre.",

	'friends:of:owned' => "Amigos de %s",

	'friends:of' => "Amigos de",
	'friends:collections' => "Colecciones de amigos",
	'collections:add' => "Nueva colecci&oacute;n",
	'friends:collections:add' => "Nueva colecci&oacute;n de amigos",
	'friends:addfriends' => "Seleccionar amigos",
	'friends:collectionname' => "Nombre de la colecci&oacute;n",
	'friends:collectionfriends' => "Amigos en la colecci&oacute;n",
	'friends:collectionedit' => "Editar esta colecci&oacute;n",
	'friends:nocollections' => "No tiene colecciones a&uacute;n",
	'friends:collectiondeleted' => "La colecci&oacute;n ha sido eliminada",
	'friends:collectiondeletefailed' => "No se puede eliminar la colecci&oacute;n",
	'friends:collectionadded' => "La colecci&oacute;n se ha creado correctamente",
	'friends:nocollectionname' => "Debe darle un nombre a la colecci&oacute;n antes de crearla",
	'friends:collections:members' => "Miembros de esta colecci&oacute;n",
	'friends:collections:edit' => "Editar colecci&oacute;n",
	'friends:collections:edited' => "Colecci&oacute;n guardada",
	'friends:collection:edit_failed' => 'No se pudo guardar la colecci&oacute;n',
 
 	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
 
	'avatar' => 'Imagen de perfil',
	'avatar:noaccess' => "No tiene permiso de editar la imagen de este usuario",
	'avatar:create' => 'Cree su imagen de perfil',
	'avatar:edit' => 'Editar imagen de perfil',
	'avatar:preview' => 'Previsualizar',
	'avatar:upload' => 'A&ntilde;adir imagen de perfil',
	'avatar:current' => 'Imagen de perfil actual',
	'avatar:remove' => 'Retirar su imagen de perfil y utilizar imagen default',
	'avatar:crop:title' => 'Herramienta de recorte de imagen de perfil',
	'avatar:upload:instructions' => "Su imagen de perfil se mostrar&aacute; en la red. Podr&aacute; modificarla siempre que lo desee (Formatos de archivo aceptados: GIF, JPG o PNG)",
	'avatar:create:instructions' => 'Haga click y arrastre un cuadrado debajo para seleccionar el recorte de la imagen. Aparecer&aacute; una previsualizaci&oacute;n en la caja de la derecha. Cuando est&eacute; conforme con la previsualizaci&oacute;n, haga click en \'Crear imagen de perfil\'. La versi&oacute;n recortada ser&aacute; mostrada en la red',
	'avatar:upload:success' => 'Imagen de perfil subida correctamente',
	'avatar:upload:fail' => 'Fall&oacute; la carga de la imagen de perfil',
	'avatar:resize:fail' => 'Error al modificar el tama&ntilde;o de la imagen de perfil',
	'avatar:crop:success' => 'Recorte de la imagen de perfil finalizado correctamente',
	'avatar:crop:fail' => 'Error en el recorte de la imagen de perfil',
	'avatar:remove:success' => 'Se ha eliminado el avatar',
	'avatar:remove:fail' => 'Fall&oacute; al remover el avatar',

	'profile:edit' => 'Editar perfil',
	'profile:aboutme' => "Sobre mi",
	'profile:description' => "Sobre mi",
	'profile:briefdescription' => "Descripci&oacute;n corta",
	'profile:location' => "Ubicaci&oacute;n",
	'profile:skills' => "Habilidades",
	'profile:interests' => "Intereses",
	'profile:contactemail' => "E-mail de contacto",
	'profile:phone' => "Tel&eacute;fono",
	'profile:mobile' => "M&oacute;vil",
	'profile:website' => "Sitio Web",
	'profile:twitter' => "Usuario de Twitter",
	'profile:saved' => "Su perfil ha sido guardado correctamente",
	
	'profile:field:text' => 'Texto corto',
	'profile:field:longtext' => 'Area de texto largo',
	'profile:field:tags' => 'Palabras Clave',
	'profile:field:url' => 'Direcci&oacute;n Web',
	'profile:field:email' => 'Direcci&oacute;n de E-mail',
	'profile:field:location' => 'Ubicaci&oacute;n',
	'profile:field:date' => 'Fecha',

	'admin:appearance:profile_fields' => 'Editar campos de perfil',
	'profile:edit:default' => 'Editar campos de perfil',
	'profile:label' => "Etiqueta de perfil",
	'profile:type' => "Tipo de perfil",
	'profile:editdefault:delete:fail' => 'Error al eliminar item de perfil por defecto',
	'profile:editdefault:delete:success' => 'Item de perfil por defecto eliminado.',
	'profile:defaultprofile:reset' => 'Reinicio de perfil de sistema ',
	'profile:resetdefault' => 'Reiniciar perfil de sistema ',
	'profile:resetdefault:confirm' => 'Confirme que desea eliminar los campos de perfil personalizados',
	'profile:explainchangefields' => "Puede reemplazar los campos de perfil existentes con sus propios utilizando el formulario de abajo. \n\n Ingrese un nuevo nombre de campo de perfil, por ejemplo, 'Equipo favorito', luego seleccione el tipo de campo (eg. texto, url, palabras clave), y haga click en el bot&oacute;n de 'Agregar'. Para re ordenar los campos arrastre el control al lado de la etiqueta del campo. Para editar la etiqueta del campo haga click en el texto de la etiqueta para volverlo editable. \n\n Puede volver a la disposici&oacute;n original del perfil en cualquier momento, pero perder&aacute; la informaci&oacute;n creada en los campos personalizados del perfil hasta el momento",
	'profile:editdefault:success' => 'Elemento agregado al perfil correctamente',
	'profile:editdefault:fail' => 'No se pudo guardar el perfil',
	'profile:field_too_long' => 'No se pudo guardar la informaci&oacute;n del perfil debido a que la secci&oacute;n "%s" es demasiado larga.',
    'profile:noaccess' => "No tienes permiso para editar este perfil.",
	
	
 /**
  * Feeds
  */
	'feed:rss' => 'Canal RSS de esta p&aacute;gina',
 /**
  * Links
  */
	'link:view' => 'Ver enlace',
	'link:view:all' => 'Ver todos',
 
 
 /**
  * River
  */
 	'river' => "Rio de Notas",
	'river:friend:user:default' => "%s ahora es amigo de %s",
	'river:update:user:avatar' => '%s tiene una nueva imagen de perfil',
	'river:update:user:profile' => '%s ha actualizado su perfil',
	'river:noaccess' => 'No posee permisos para visualizar este elemento',
	'river:posted:generic' => '%s publicado',
	'riveritem:single:user' => 'un usuario',
	'riveritem:plural:user' => 'algunos usuarios',
	'river:ingroup' => 'en el grupo %s',
	'river:none' => 'Sin actividad',
	'river:update' => 'Actualizaciones de %s',
	'river:delete:success' => 'El item en el Rio de Notas ha sido borrado',
	'river:delete:fail' => 'El item en el Rio de Notas no pudo ser borrado',
	
	'river:widget:title' => "Actividad",
	'river:widget:description' => "Mostrar la &uacute;ltima actividad",
	'river:widget:type' => "Tipo de actividad",
	'river:widgets:friends' => 'Actividad de amigos',
	'river:widgets:all' => 'Toda la actividad del sitio',
 
 /**
  * Notifications
  */
	'notifications:usersettings' => "Configuraci&oacute;n de notificaciones",
	'notifications:methods' => "Por favor, indique los m&eacute;todos que desea habilitar",
	'notification:method:email' => 'Correo electr&oacute;nico',
 
	'notifications:usersettings:save:ok' => "Su configuraci&oacute;n de notificaciones se guard&oacute; correctamente",
	'notifications:usersettings:save:fail' => "Ocurri&oacute; un error al guardar la configuraci&oacute;n de notificaciones",
 
	'user.notification.get' => 'Retornar la configuraci&oacute;n de notificaciones para un usuario dado',
	'user.notification.set' => 'Establecer la configuraci&oacute;n de notificaciones para un usuario dado',
 /**
  * Search
  */

	'search' => "Buscar",
	'searchtitle' => "Buscar: %s",
	'users:searchtitle' => "Buscar para usuarios: %s",
	'groups:searchtitle' => "Buscar para grupos: %s",
	'advancedsearchtitle' => "%s con coincidencias en resultados %s",
	'notfound' => "No se encontraron resultados",
	'next' => "Siguiente",
	'previous' => "Anterior",

	'viewtype:change' => "Modificar tipo de lista",
	'viewtype:list' => "Vista de lista",
	'viewtype:gallery' => "Galer&iacute;a",

	'tag:search:startblurb' => "Items con palabras clave que coincidan con '%s':",

	'user:search:startblurb' => "Usuarios que coincidan con '%s':",
	'user:search:finishblurb' => "Haga click aqu&iacute; para ver m&aacute;s",

	'group:search:startblurb' => "Grupos que coinciden con '%s':",
	'group:search:finishblurb' => "Haga click aqu&iacute; para ver m&aacute;s",
	'search:go' => 'Ir',
	'userpicker:only_friends' => 'S&oacute;lo amigos',
 
 /**
  * Account
  */
  
	'account' => "Cuenta",
	'settings' => "Configuraci&oacute;n",
	'tools' => "Herramientas",
	'settings:edit' => 'Editar configuraci&oacute;n',

	'register' => "Agregar",
	'registerok' => "Se registr&oacute; correctamente para %s",
	'registerbad' => "No se pudo registrar debido a un error desconocido",
	'registerdisabled' => "El registro se ha deshabilitado por el administrador del sistema",
	'register:fields' => 'Todos los campos son obligatorios',

	'registration:notemail' => 'No ha ingresado una direcci&oacute;n de E-mail v&aacute;lida',
	'registration:userexists' => 'El nombre de usuario ya existe',
	'registration:usernametooshort' => 'El nombre de usuario debe tener un m&iacute;nimo de %u caracteres',
	'registration:usernametoolong' => 'Su nombre de usuario puede tener m&aacute;ximo %u caracteres.',
	'registration:passwordtooshort' => 'La contrase&ntilde;a debe tener un m&iacute;nimo de %u caracteres',
	'registration:dupeemail' => 'Ya se encuentra registrada la direcci&oacute;n de E-mail',
	'registration:invalidchars' => 'Lo sentimos, su nombre de usuario posee los caracteres inv&aacute;lidos: %s. Estos son todos los caracteres que se encuentran invalidados: %s',
	'registration:emailnotvalid' => 'Lo sentimos, la direcci&oacute;n de E-mail que ha ingresado es inv&aacute;lida en el sistema',
	'registration:passwordnotvalid' => 'Lo sentimos, la contrase&ntilde;a que ha ingresado es inv&aacute;lida en el sistema',
	'registration:usernamenotvalid' => 'Lo sentimos, el nombre de usuario que ha ingresado es inv&aacute;lida en el sistema',

	'adduser' => "A&ntilde;adir usuario",
	'adduser:ok' => "Agreg&oacute; correctamente un nuevo usuario",
	'adduser:bad' => "No se pudo crear el usuario",

	'user:set:name' => "Configuraci&oacute;n del nombre de cuenta",
	'user:name:label' => "Mi nombre para mostrar",
	'user:name:success' => "Se modific&oacute; correctamente su nombre",
	'user:name:fail' => "No se pudo modificar su nombre. Por favor, aseg&uacute;rese de que no es demasiado largo e intente nuevamente",

	'user:set:password' => "Contrase&ntilde;a de la cuenta",
	'user:current_password:label' => 'Contrase&ntilde;a actual',
	'user:password:label' => "Nueva contrase&ntilde;a",
	'user:password2:label' => "Confirmar nueva contrase&ntilde;a",
	'user:password:success' => "Contrase&ntilde;a modificada",
	'user:password:fail' => "No se pudo modificar la contrase&ntilde;a",
	'user:password:fail:notsame' => "Las dos contrase&ntilde;as no coinciden.",
	'user:password:fail:tooshort' => "La contrase&ntilde;a es demasiado corta.",
	'user:password:fail:incorrect_current_password' => 'La contrase&ntilde;a actual ingresada es incorrecta',
	'user:resetpassword:unknown_user' => 'Usuario inv&aacute;lido',
	'user:resetpassword:reset_password_confirm' => 'Al modificar la contrase&ntilde;a se le enviar&aacute; la nueva a la direcci&oacute;n de E-mail registrada',

	'user:set:language' => "Configuraci&oacute;n de lenguaje",
	'user:language:label' => "Su lenguaje",
	'user:language:success' => "Se actualiz&oacute; su configuraci&oacute;n de lenguaje",
	'user:language:fail' => "No se pudo actualizar su configuraci&oacute;n de lenguaje",

	'user:username:notfound' => 'No se encuentra el usuario %s',

	'user:password:lost' => 'Olvid&eacute; mi contrase&ntilde;a',
	'user:password:resetreq:success' => 'Solicitud de nueva contrase&ntilde;a confirmada, se le ha enviado un E-mail',
	'user:password:resetreq:fail' => 'No se pudo solicitar una nueva contrase&ntilde;a',
	
	'user:password:text' => 'Para solicitar una nueva contrase&ntilde;a ingrese su nombre de usuario y presione el bot&oacute;n debajo',

	'user:persistent' => 'Recordarme',	
	
	'walled_garden:welcome' => 'Bienvenido a',
	
/**
 * Administration
 */
	'menu:page:header:administer' => 'Administrar',
	'menu:page:header:configure' => 'Configurar',
	'menu:page:header:develop' => 'Desarrollar',
	'menu:page:header:default' => 'Otro',

	'admin:view_site' => 'Ver el sitio',
	'admin:loggedin' => 'Sesi&oacute;n %s',
	'admin:menu' => 'Men&uacute;',

	'admin:configuration:success' => "Configuraci&oacute;n guardada",
	'admin:configuration:fail' => "No se pudo guardar su configuraci&oacute;n",
	'admin:configuration:dataroot:relative_path' => 'No se puede configurar "%s" como el directorio de datos raiz ya que la ruta no es absoluta.',

	'admin:unknown_section' => 'Secci&oacute;n de administraci&oacute;n no v&aacute;lida',

	'admin' => "Administraci&oacute;n",
	'admin:description' => "El panel de administraci&oacute;n le permite organizar todos los aspectos del sistema, desde la gesti&oacute;n de usuarios hasta el comportamiento de los plugins. Seleccione una opci&oacute;n debajo para comenzar",

	'admin:statistics' => "Estad&iacute;sticas",
	'admin:statistics:overview' => 'Resumen',
	'admin:statistics:server' => 'Informaci&oacute;n del servidor',
	
	'admin:appearance' => 'Apariencia',
	'admin:administer_utilities' => 'Utilerias',
	'admin:develop_utilities' => 'Utilerias',
	
	'admin:users' => "Usuarios",
	'admin:users:online' => 'Conectados',
	'admin:users:newest' => 'Usuarios m&aacute;s recientes',
	'admin:users:admins' => 'Administradores',
	'admin:users:add' => 'Agregar Nuevo Usuario',
	'admin:users:description' => "Este panel de administraci&oacute;n le permite gestionar la configuraci&oacute;n de usuarios del sitio. Seleccione una opci&oacute;n debajo para comenzar",
	'admin:users:adduser:label' => "Haga click aqu&iacute; para agregar un usuario..",
	'admin:users:opt:linktext' => "Configurar usuarios..",
	'admin:users:opt:description' => "Configurar usuarios e informaci&oacute;n de cuentas",
	'admin:users:find' => 'Buscar',

	'admin:settings' => 'Configuraci&oacute;n',
	'admin:settings:basic' => 'Configuraci&oacute;n B&aacute;sica',
	'admin:settings:advanced' => 'Configuraci&oacute;n Avanzada',
	'admin:site:description' => "Este panel de administraci&oacute;n le permite gestionar la configuraci&oacute;n global de la red. Selecciona una opci&oacute;n debajo para comenzar",
	'admin:site:opt:linktext' => "Configurar el sitio..",
	'admin:site:access:warning' => "Las modificaciones en el control de accesos s&oacute;lo tendr&aacute; impacto en los accesos futuros",
	
	'admin:dashboard' => 'Panel de control',
	'admin:widget:online_users' => 'Usuarios conectados',
	'admin:widget:online_users:help' => 'Lista los usuarios conectados actualmente al sitio',
	'admin:widget:new_users' => 'Usuarios Nuevos',
	'admin:widget:new_users:help' => 'Lista los usuarios m&aacute;s nuevos',
	'admin:widget:content_stats' => 'Estad&iacute;sticas de contenido',
	'admin:widget:content_stats:help' => 'Seguimiento del contenido creado por los usuarios del sitio',
	'widget:content_stats:type' => 'Tipo de contenido',
	'widget:content_stats:number' => 'N&uacute;mero',
 
	'admin:widget:admin_welcome' => 'Bienvenido',
	'admin:widget:admin_welcome:help' => "Esta es el &aacute;rea de administraci&oacute;n",
 	'admin:widget:admin_welcome:intro' =>
'Bienvenido! Se encuentra viendo el panel de control de administraci&oacute;n, es &uacute;til para administrar la configuraci&oacute;n del sitio',
 
 	'admin:widget:admin_welcome:admin_overview' =>
"La navegaci&oacute;n para el &aacute;rea de administraci&oacute;n se encuentra en el men&uacute; de la derecha, y est&aacute; organizada en"
. " tres secciones:
 	<dl>
		<dt>Administrar</dt><dd>Tareas diarias como: monitorear contenido reportado, verificar qui&eacute;n se encuentra conectado y visualizar estad&iacute;sticas.</dd>
		<dt>Configurar</dt><dd>Tareas ocasionales como: establecer el nombre de la red social o activar y desactivar plugins.</dd>
		<dt>Desarrollar</dt><dd>Para desarrolladores quienes construyen plugins o dise&ntilde;an temas personalizados. (Requiere el plugin de desarrollador.)</dd>
 	</dl>
 	",
 
 	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Aseg&uacute;rese de verificar los recursos disponibles en los enlaces del pi&eacute; de p&aacute;gina y gracias por utilizar Elgg!',

	'admin:widget:control_panel' => 'Panel de control',
	'admin:widget:control_panel:help' => "Provee un acceso directo a los principales controles",
 
	'admin:cache:flush' => 'Limpiar Cache',
	'admin:cache:flushed' => "La cache del sitio ha sido limpiada",

	'admin:footer:faq' => 'FAQs de Administraci&oacute;n',
	'admin:footer:manual' => 'Manual de Administraci&oacute;n',
	'admin:footer:community_forums' => 'Foros de la Comunidad Elgg',
	'admin:footer:blog' => 'Blog Elgg',

	'admin:plugins:category:all' => 'Todos los plugins',
	'admin:plugins:category:active' => 'Plugins activos',
	'admin:plugins:category:inactive' => 'Plugins inactivos',
 	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Inclu&iacute;do',
	'admin:plugins:category:nonbundled' => 'No integrado',
	'admin:plugins:category:content' => 'Contenido',
	'admin:plugins:category:development' => 'Desarrollo',
	'admin:plugins:category:enhancement' => 'Mejoras',
	'admin:plugins:category:api' => 'Servicio/API',
	'admin:plugins:category:communication' => 'Comunicaci&oacute;n',
	'admin:plugins:category:security' => 'Seguridad y Spam',
 	'admin:plugins:category:social' => 'Social',
 	'admin:plugins:category:multimedia' => 'Multimedia',
	'admin:plugins:category:theme' => 'Temas',
 	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Utilidades',
 
	'admin:plugins:sort:priority' => 'Prioridad',
	'admin:plugins:sort:alpha' => 'Alfab&eacute;tico',
	'admin:plugins:sort:date' => 'Por fecha',
 
	'admin:plugins:markdown:unknown_plugin' => 'Plugin desconocido',
	'admin:plugins:markdown:unknown_file' => 'Archivo desconocido',
 
 
	'admin:notices:could_not_delete' => 'Notificaci&oacute;n: no se pudo eliminar',
	'item:object:admin_notice' => 'Opciones de Notificaci&oacute;n',
 
	'admin:options' => 'Opciones de Admin',
 
 
 /**
  * Plugins
  */
	'plugins:disabled' => 'No se cargaron plugins porque se encontr&oacute; archivo "disabled" en el directorio mod.',
	'plugins:settings:save:ok' => "Configuraci&oacute;n para el plugin %s guardada correctamente",
	'plugins:settings:save:fail' => "Ocurri&oacute; un error al intentar guardar la configuraci&oacute;n para el plugin %s",
	'plugins:usersettings:save:ok' => "Configuraci&oacute;n del usuario para el plugin %s guardada",
	'plugins:usersettings:save:fail' => "Ocurri&oacute; un error al intentar guardar la configuraci&oacute;n del usuario para el plugin %s",
 	'item:object:plugin' => 'Plugins',
	
 	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Activar todos',
	'admin:plugins:deactivate_all' => 'Desactivar todos',
	'admin:plugins:activate' => 'Activar',
	'admin:plugins:deactivate' => 'Desactivar',
	'admin:plugins:description' => "Este panel le permite controlar y configurar las herramientas instaladas en su sitio",
	'admin:plugins:opt:linktext' => "Configurar herramientas..",
	'admin:plugins:opt:description' => "Configurar las herramientas instaladas. ",
	'admin:plugins:label:author' => "Autor",
 	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Categor&iacute;as',
	'admin:plugins:label:licence' => "Licencia",
 	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:repository' => "Codigo",
	'admin:plugins:label:bugtracker' => "Reportar problema",
	'admin:plugins:label:donate' => "Donar",
	'admin:plugins:label:moreinfo' => 'mas informaci&oacute;n',
	'admin:plugins:label:version' => 'Versi&oacute;n',
	'admin:plugins:label:location' => 'Ubicacion',
	'admin:plugins:label:dependencies' => 'Dependencias',

	'admin:plugins:warning:elgg_version_unknown' => 'Este plugin utiliza un archivo de manifiesto obsoleto y no especifica una versi&oacute;n de Elgg compatible. Es muy probable que no funcione.',
	'admin:plugins:warning:unmet_dependencies' => 'Este plugin tiene dependencias desconocidas y no se activar&aacute;. Consulte las dependencias debajo para m&aacute;s informaci&oacute;n',
	'admin:plugins:warning:invalid' => '%s no es un plugin Elgg v&aacute;lido. Visite <a href="http://docs.elgg.org/Invalid_Plugin">la Documentaci&oacute;n Elgg</a> para consejos de soluci&oacute;n de problemas',
	'admin:plugins:warning:invalid:check_docs' => 'Revisa la <a href="http://docs.elgg.org/Invalid_Plugin">documentaci&oacute;n de Elgg</a> para consejos de resoluci&oacute;n de problemas.',
	'admin:plugins:cannot_activate' => 'no se puede activar',
	
	'admin:plugins:set_priority:yes' => "Reordenar %s",
	'admin:plugins:set_priority:no' => "No se pudo reordenar %s.",
	'admin:plugins:set_priority:no_with_msg' => "No se pudo reordenar %s. Error: %s",
	'admin:plugins:deactivate:yes' => "Desactivar %s",
	'admin:plugins:deactivate:no' => "No se puede desactivar %s",
	'admin:plugins:deactivate:no_with_msg' => "Mo se pudo desactivar %s. Error: %s",
	'admin:plugins:activate:yes' => "Activado %s",
	'admin:plugins:activate:no' => "No se puede activar %s",
	'admin:plugins:activate:no_with_msg' => "No se pudo activar %s. Error: %s",
	'admin:plugins:categories:all' => 'Todas las categor&iacute;as',
	'admin:plugins:plugin_website' => 'Sitio de plugins',
 	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Versi&oacute;n %s',
	'admin:plugin_settings' => 'Configuraci&oacute;n',
	'admin:plugins:warning:unmet_dependencies_active' => 'El plugin se encuentra activo pero posee dependencias desconocidas. Puede que se encuentren problemas en su funcionamiento. Vea "mas informaci&oacute;n" debajo para m&aacute;s detalles',

	'admin:plugins:dependencies:type' => 'Tipo',
	'admin:plugins:dependencies:name' => 'Nombre',
	'admin:plugins:dependencies:expected_value' => 'Valor Esperado',
	'admin:plugins:dependencies:local_value' => 'Valor Actual',
	'admin:plugins:dependencies:comment' => 'Comentario',

	'admin:statistics:description' => "Este es un resumen de las estad&iacute;sticas del sitio. Si necesita estad&iacute;sticas mas avanzadas, hay dispoinble una funcionalidad de administraci&oacute;n profesional",
	'admin:statistics:opt:description' => "Ver informaci&oacute;n estad&iacute;stica sobre usuarios y objetos en el sitio",
	'admin:statistics:opt:linktext' => "Ver estad&iacute;sticas.",
	'admin:statistics:label:basic' => "Estad&iacute;sticas b&aacute;sicas del sitio",
	'admin:statistics:label:numentities' => "Entidades del sitio",
	'admin:statistics:label:numusers' => "Cantidad de usuarios",
	'admin:statistics:label:numonline' => "Cantidad de usuarios conectados",
	'admin:statistics:label:onlineusers' => "Usuarios conectados en este momento",
	'admin:statistics:label:admins'=>"Admins",
	'admin:statistics:label:version' => "Versi&oacute;n de Elgg",
 	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Versi&oacute;n",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Servidor Web',
	'admin:server:label:server' => 'Servidor',
	'admin:server:label:log_location' => 'Localizaci&oacute;n de los registros',
	'admin:server:label:php_version' => 'Versi&oacute;n de PHP',
	'admin:server:label:php_ini' => 'Ubicaci&oacute;n del archivo PHP ini',
	'admin:server:label:php_log' => 'Registros de PHP',
	'admin:server:label:mem_avail' => 'Memoria disponible',
	'admin:server:label:mem_used' => 'Memoria utilizada',
	'admin:server:error_log' => "Registro de errores del servidor Web",
	'admin:server:label:post_max_size' => 'Tama&ntilde;o m&aacute;ximo de las peticiones POST',
	'admin:server:label:upload_max_filesize' => 'Tama&ntilde; m&aacute;ximo de archivos',
	'admin:server:warning:post_max_too_small' => '(Nota: post_max_size debe ser mayor que el tama&ntilde; indicado aqu&iacute; para habilitar las subidas)',

	'admin:user:label:search' => "Encontrar usuarios:",
	'admin:user:label:searchbutton' => "Buscar",

	'admin:user:ban:no' => "No puede bloquear al usuario",
	'admin:user:ban:yes' => "Usuario bloqueado",
	'admin:user:self:ban:no' => "No puede bloquearse a usted mismo",
	'admin:user:unban:no' => "No puede desbloquear al usuario",
	'admin:user:unban:yes' => "Usuario desbloqueado",
	'admin:user:delete:no' => "No puede eliminar al usuario",
	'admin:user:delete:yes' => "El usuario %s ha sido eliminado",
	'admin:user:self:delete:no' => "No puede eliminarse a usted mismo",

 	'admin:user:resetpassword:yes' => "Contrase&ntilde;a restablecida, se notifica al usuario",
	'admin:user:resetpassword:no' => "No se puede restablecer la contrase&ntilde;a",

	'admin:user:makeadmin:yes' => "El usuario ahora es administrador",
	'admin:user:makeadmin:no' => "No se pudo establecer al usuario como administrador",

	'admin:user:removeadmin:yes' => "El usuario ya no es administrador",
	'admin:user:removeadmin:no' => "No se pueden quitar los privilegios de administrador de este usuario",
	'admin:user:self:removeadmin:no' => "No puede quitarse sus propios privilegios de administrador",

	'admin:appearance:menu_items' => 'Elementos del Men&uacute;',
	'admin:menu_items:configure' => 'Configurar los elementos del men&uacute; principal',
	'admin:menu_items:description' => 'Seleccione qu&eacute; elementos del men&uacute; desea mostrar como enlaces favoritos. Los elementos no mostrados se guardar&aacute;n en el "Mas" al final de la lista',
	'admin:menu_items:hide_toolbar_entries' => 'Quitar enlaces del men&uacute; de la barra de herramientas?',
	'admin:menu_items:saved' => 'Elementos del men&uacute; guardados',
	'admin:add_menu_item' => 'Agregar un elemento del men&uacute; personalizado',
	'admin:add_menu_item:description' => 'Complete el nombre para mostrar y la direcci&oacute;n url para agregar un elemento de men&uacute; personalizado',

	'admin:appearance:default_widgets' => 'Widgets por defecto',
	'admin:default_widgets:unknown_type' => 'Tipo de widget desconocido',
	'admin:default_widgets:instructions' => 'Agregar, quitar, mover y configurar los widgets por defecto en la p&aacute;gina de widget seleccionada'
		. ' Estos cambios s&oacute;lo tendr&aacute;n impacto en los nuevos usuarios',
 
 /**
  * User settings
  */
	'usersettings:description' => "El panel de configuraci&oacute;n permite parametrizar sus preferencias personales. Seleccione una opci&oacute;n debajo para comenzar",
 
	'usersettings:statistics' => "Sus estad&iacute;sticas",
	'usersettings:statistics:opt:description' => "Ver informaci&oacute;n estad&iacute;stica de usuarios y objectos en la red",
	'usersettings:statistics:opt:linktext' => "Estad&iacute;sticas de la cuenta",
 
	'usersettings:user' => "Sus preferencias",
	'usersettings:user:opt:description' => "Esto le permite establecer sus preferencias",
	'usersettings:user:opt:linktext' => "Modificar sus preferencias",
 
	'usersettings:plugins' => "Herramientas",
	'usersettings:plugins:opt:description' => "Preferencias de Configuraci&oacute;n para sus herramientas activas",
	'usersettings:plugins:opt:linktext' => "Configure sus herramientas",
 
	'usersettings:plugins:description' => "Este panel le permite establecer sus preferencias personales para las herramientas habilitadas por el administrador del sistema",
	'usersettings:statistics:label:numentities' => "Su contenido",
 
	'usersettings:statistics:yourdetails' => "Sus detalles",
	'usersettings:statistics:label:name' => "Nombre completo",
 	'usersettings:statistics:label:email' => "E-mail",
	'usersettings:statistics:label:membersince' => "Miembro desde",
	'usersettings:statistics:label:lastlogin' => "&Uacute;ltimo acceso",
 
 /**
  * Activity river
  */
	'river:all' => 'Actividad del R&iacute;o de Noticias',
	'river:mine' => 'Mi Actividad',
	'river:friends' => 'Actividad de mis Amigos',
	'river:select' => 'Mostrar %s',
	'river:comments:more' => '%u m&aacute;s',
	'river:generic_comment' => 'comentado en %s %s',

	'friends:widget:description' => "Muestra algunos de sus amigos",
	'friends:num_display' => "Cantidad de amigos a mostrar",
	'friends:icon_size' => "Tama&ntilde;o del &iacute;cono",
	'friends:tiny' => "peque&ntilde;o",
	'friends:small' => "chico",
 
 /**
  * Generic action words
  */
  
	'save' => "Guardar",
	'reset' => 'Reiniciar',
	'publish' => "Publicar",
	'cancel' => "Cancelar",
	'saving' => "Guardando..",
	'update' => "Actualizar",
	'preview' => "Previsualizar",
	'edit' => "Editar",
	'delete' => "Eliminar",
	'accept' => "Aceptar",
	'load' => "Cargar",
	'upload' => "Subir",
	'ban' => "Bloquear",
	'unban' => "Desbloquar",
	'banned' => "Bloqueado",
	'enable' => "Habilitar",
	'disable' => "Deshabilitar",
	'request' => "Solicitud",
	'complete' => "Completa",
	'open' => 'Abrir',
	'close' => 'Cerrar',
	'reply' => "Responder",
	'more' => 'M&aacute;s',
	'comments' => 'Comentarios',
	'import' => 'Importar',
	'export' => 'Exportar',
	'untitled' => 'Sin T&iacute;tulo',
	'help' => 'Ayuda',
	'send' => 'Enviar',
	'post' => 'Publicar',
	'submit' => 'Enviar',
	'comment' => 'Comentar',
	'upgrade' => 'Actualizar',
	'sort' => 'Ordenar',
	'filter' => 'Filtrar',
	'new' => 'Nuevo',
	'add' => 'A&ntilde;adir',
	'create' => 'Crear',
	'remove' => 'Remover',
	'revert' => 'Revertir',
	
	'site' => 'Sitio',
	'activity' => 'Actividad',
	'members' => 'Miembros',

	'up' => 'Arriba',
	'down' => 'Abajo',
	'top' => 'Primero',
	'bottom' => '&Uacute;ltimo',
	'back' => 'Atr&aacute;s',

	'invite' => "Invitar",

	'resetpassword' => "Restablecer contrase&ntilde;a",
	'makeadmin' => "Hacer administrador",
	'removeadmin' => "Quitar administrador",
 
	'option:yes' => "S&iacute;",
 	'option:no' => "No",
 
	'unknown' => 'Desconocido',
 
	'active' => 'Activo',
 	'total' => 'Total',
 
	'learnmore' => "Haga click aqu&iacute; para ver m&aacute;s",
 
	'content' => "contenido",
	'content:latest' => '&Uacute;ltima actividad',
	'content:latest:blurb' => 'Alternativamente, haga click aqu&iacute; para ver el &uacute;ltimo contenido en toda la red',
 
	'link:text' => 'ver link',	
 /**
  * Generic questions
  */

	'question:areyousure' => 'Esta seguro de hacer esto?',
 
 /**
  * Generic data words
  */

	'title' => "T&iacute;tulo",
	'description' => "Descripci&oacute;n",
 	'tags' => "Palabras Clave",
	'spotlight' => "Destacado",
	'all' => "Todo",
	'mine' => "M&iacute;o",
 
	'by' => 'por',
	'none' => 'nada',
 
	'annotations' => "Notas",
	'relationships' => "Relaciones",
 	'metadata' => "Metadata",
	'tagcloud' => "Nube de Palabras Clave",
	'tagcloud:allsitetags' => "Palabras Clave de todo el sitio",
 
	'on' => 'Habilitado',
	'off' => 'Deshabilitado',
	
 /**
  * Entity actions
  */
	'edit:this' => 'Editar',
	'delete:this' => 'Eliminar',
	'comment:this' => 'Comentar',
 
 /**
  * Input / output strings
  */
  
	'deleteconfirm' => "&iquest;Est&aacute; seguro de eliminar este item?",
	'deleteconfirm:plural' => "&iquest;Seguro que deseas borrar estos elementos?",
	'fileexists' => "El archivo ya se ha subido. Para reemplazarlo, seleccione:",
 
 /**
  * User add
  */
  
	'useradd:subject' => 'Cuenta de usuario creada',
 	'useradd:body' => '
 %s,
 
Su cuenta de usuario ha sido creada en %s. Para ingresar visite:
 
 %s
 
E inicie sesi&oacute;n con las siguientes credenciales:
 
 Usuario: %s
 Password: %s
 
Una vez autenticado, le recomendamos que modifique su contrase&ntilde;a.
 ',
 
 /**
  * System messages
  **/

	'systemmessages:dismiss' => "haga click para cerrar",
 
 
 /**
  * Import / export
  */
	'importsuccess' => "Importaci&oacute;n exitosa",
	'importfail' => "Error al importar datos de OpenDD",
 
 /**
  * Time
  */

	'friendlytime:justnow' => "justo ahora",
	'friendlytime:minutes' => "hace %s minutos",
	'friendlytime:minutes:singular' => "hace un minuto",
	'friendlytime:hours' => "hace %s horas",
	'friendlytime:hours:singular' => "hace una hora",
	'friendlytime:days' => "hace %s d&iacute;as",
	'friendlytime:days:singular' => "ayer",
 	'friendlytime:date_format' => 'j F Y @ g:ia',
 
	'date:month:01' => 'Enero %s',
	'date:month:02' => 'Febrero %s',
	'date:month:03' => 'Marzo %s',
	'date:month:04' => 'Abril %s',
	'date:month:05' => 'Mayo %s',
	'date:month:06' => 'Junio %s',
	'date:month:07' => 'Julio %s',
	'date:month:08' => 'Agosto %s',
	'date:month:09' => 'Septiembre %s',
	'date:month:10' => 'Octubre %s',
	'date:month:11' => 'Noviembre %s',
	'date:month:12' => 'Diciembre %s',
 
 
 /**
  * System settings
  */

	'installation:sitename' => "El nombre del sitio:",
	'installation:sitedescription' => "Breve descripci&oacute;n del sitio (opcional):",
	'installation:wwwroot' => "URL del sitio:",
	'installation:path' => "La ruta completa a la instalaci&oacute;n de Elgg:",
	'installation:dataroot' => "La ruta completa al directorio de datos:",
	'installation:dataroot:warning' => "Debe crear este directorio manualmente y debe encontrarse en un directorio diferente al de la instalaci&oacute;n de Elgg",
	'installation:sitepermissions' => "Permisos de nivel de seguridad de publicaci&oacute;n por defecto:",
	'installation:language' => "Lenguaje por defecto para el sitio:",
	'installation:debug' => "El modo Debug provee informaci&oacute;n extra que puede utilizarse para evaluar eventualidades. Puede enlentecer el funcionamiento del sistema y debe utilizarse s&oacute;lo cuando se detectan problemas:",
	'installation:debug:none' => 'Desactivar el modo Debug (recomendado)',
	'installation:debug:error' => 'Mostrar s&oacute;lo errores cr&iacute;ticos',
	'installation:debug:warning' => 'Mostrar s&oacute;lo alertas cr&iacute;ticas',
	'installation:debug:notice' => 'Mostrar todos los errores, alertas e informaci&oacute; de eventos',
 
 	// Walled Garden support
	'installation:registration:description' => 'El registro de usuarios se encuentra habilitado por defecto. Puede deshabilitarla para impedir que nuevos usuarios se registren por s&iacute; mismos',
	'installation:registration:label' => 'Permitir el registro de nuevos usuarios',
	'installation:walled_garden:description' => 'Habilitar al sitio para ejecutarse como una red privada. Esto impedir&aacute; a usuarios no registrados visualizar cualquier p&aacute;gina del sitio, exceptuando las establecidas como p&uacute;blicas',
	'installation:walled_garden:label' => 'Restringir p&aacute;ginas a usuarios registrados',
 
	'installation:httpslogin' => "Habilitar esta opci&oacute;n para que los usuarios se autentiquen mediante HTTPS. Necesitar&aacute; habilitar HTTPS en el server tambi&eacute;n para que esto funcione",
	'installation:httpslogin:label' => "Habilitar autenticaci&oacute;n HTTPS",
	'installation:view' => "Ingrese la vista que se visualizar&aacute; por defecto en el sitio o deje esto en blanco para la vista por defecto (si tiene dudas, d&eacute;jelo por defecto):",
 
	'installation:siteemail' => "Direcci&oacute;n de E-mail del sitio (utilizada para enviar mails desde el sistema):",
 
	'installation:disableapi' => "Elgg provee una API para el desarrollo de servicios web de modo que aplicaciones remotas puedan interactuar con el sitio",
	'installation:disableapi:label' => "Habilitar la API de servicios web de Elgg",
 
	'installation:allow_user_default_access:description' => "Si se selecciona, se les permitir&aacute; a los usuarios establecer su propio nivel de seguridad de publicaci&oacute;n",
	'installation:allow_user_default_access:label' => "Permitir al usuario establecer su propio nivel de seguridad de publicaci&oacute;n por defecto",
 
	'installation:simplecache:description' => "La cache simple aumenta el rendimiento almacenando contenido est&aacute;tico, como hojas CSS y archivos JavaScript. Normalmente debe estar activado",
	'installation:simplecache:label' => "Utilizar cache simple (recomendado)",

	'installation:systemcache:description' => "El cache de sistema disminuye el tiempo de carga de Elgg mediante un buffer de datos en archivos.",
	'installation:systemcache:label' => "Utilizar cache de sistema (recomendado)",
 
	'upgrading' => 'Actualizando..',
	'upgrade:db' => 'La base de datos ha sido actualizada',
	'upgrade:core' => 'La instalaci&oacute;n de Elgg ha sido actualizada',
	'upgrade:unlock' => 'Actualizaci&oacute;n desbloqueada',
	'upgrade:unlock:confirm' => "La base de datos esta bloqueada para otra actualizaci&oacute;n. Actualizar en forma concurrente es arriesgado, solo debe continuar si no hay otra actualizaci&oacute;n en ejecuci&oacute;n. &iquest;Desbloquear?",
	'upgrade:locked' => "No se puede actualizar, otra actualizaci&oacute;n esta en ejecuci&oacute;n. Para liberar, visite la secci&oacute;n de Administraci&oacute;n.",
	'upgrade:unlock:success' => "Actualizaci&oacute;n desbloqueada",
	'upgrade:unable_to_upgrade' => 'No se puede actualizar',
 	'upgrade:unable_to_upgrade_info' =>
		'La instalaci&oacute;n no se puede actualizar debido a que se detectaron vistas antiguas
		en el directorio de views del core de Elgg. Estas vistas han quedado obsoletas y deben removerse
		para que Elgg funcione correctamente. Si no ha efectuado cambios al core de Elgg, puede
		simplemente eliminar el directorio de vistas y reemplazarlo con el del &uacute;ltimo paquete de instalaci&oacute;n
		de Elgg descargado de <a href="http://elgg.org">elgg.org</a>.<br /><br />

		Si necesita instrucciones detalladas, por favor visite la <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		documentaci&oacute;n de actualizaci&oacute;n de Elgg</a>. Si necesita asistencia, por favor acuda a los
		<a href="http://community.elgg.org/pg/groups/discussion/">Foros de Soporte de la Comunidad</a>',
 
	'update:twitter_api:deactivated' => 'La API de Twitter (anteriormente Twitter Service) se ha desactivado durante la actualizaci&oacute;n. Por favor act&iacute;vela manualmente si se requiere',
	'update:oauth_api:deactivated' => 'La API OAuth (anteriormente OAuth Lib) se ha desactivado durante la actualizaci&oacute;n. Por favor act&iacute;vela manualmente si se requiere',
 
	'deprecated:function' => '%s() ha quedado obsoleta por %s()',
 
 /**
  * Welcome
  */
  
	'welcome' => "Bienvenido",
	'welcome:user' => 'Bienvenido %s',
 
 /**
  * Emails
  */
	'email:settings' => "Configuraci&oacute;n de E-mail",
	'email:address:label' => "Direcci&oacute;n de E-mail",
 
	'email:save:success' => "Nueva direcci&oacute;n de E-mail guardada, se solicit&oacute; la verificaci&oacute;n",
	'email:save:fail' => "No se pudo guardar la nueva direcci&oacute;n de E-mail",
 
	'friend:newfriend:subject' => "%s le ha a&ntilde;adido como amigo",
	'friend:newfriend:body' => "%s le ha a&ntilde;adido como amigo
 
Para visualizar su perfil haga click aqu&iacute;:
 
 %s
 
Por favor no responda a este mail",
 
 
 
	'email:resetpassword:subject' => "Contrase&ntilde;a restablecida!",
	'email:resetpassword:body' => "Hola %s,
 
Su contrase&ntilde;a ha sido restablecida a: %s",
 
 
	'email:resetreq:subject' => "Solicitud de nueva contrase&ntilde;a",
	'email:resetreq:body' => "Hola %s,
 
Alguien (desde la direcci&oacute;n IP %s) solicit&oacute; una nueva contrase&ntilde;a para su cuenta.
 
Si usted realiz&oacute; la solicitud, haga click en el link debajo, en caso contrario, por favor ignore este correo.
 
 %s
 ",

 /**
  * user default access
  */
  
	'default_access:settings' => "Su nivel de seguridad de publicaci&oacute;n por defecto",
	'default_access:label' => "Nivel de seguridad de publicaci&oacute;n por defecto",
	'user:default_access:success' => "El nivel de seguridad de publicaci&oacute;n por defecto ha sido guardado",
	'user:default_access:failure' => "El nivel de seguridad de publicaci&oacute;n por defecto no ha podido ser guardado",
 
 /**
  * XML-RPC
  */
	'xmlrpc:noinputdata'	=>	"Datos faltantes",
 
 /**
  * Comments
  */
  
	'comments:count' => "%s comentarios",

	'river:comment:object:default' => '%s coment&oacute; en %s',
 
	'generic_comments:add' => "Comentar",
	'generic_comments:post' => "Publicar un comentario",
	'generic_comments:text' => "Comentar",
	'generic_comments:latest' => "&Uacute;ltimos comentarios",
	'generic_comment:posted' => "Se ha publicado su comentario",
	'generic_comment:deleted' => "Se ha quitado su comentario",
	'generic_comment:blank' => "Lo sentimos, debe ingresar alg&uacute;n comentario antes de poder guardarlo",
	'generic_comment:notfound' => "Lo sentimos, no se pudo encontrer el item especificado",
	'generic_comment:notdeleted' => "Lo sentimos, no se pudo eliminar el comentario",
	'generic_comment:failure' => "Ocurri&oacute; un error inesperado al intentar agregar su comentario. Por favor intente nuevamente",
	'generic_comment:none' => 'Sin comentarios',
	'generic_comment:title' => 'Comentario de %s',
	'generic_comment:on' => '%s en %s',
 
	'generic_comment:email:subject' => 'Tiene un nuevo comentario.',
	'generic_comment:email:body' => "Tiene un nuevo comentario en el item \"%s\" de %s. Este es:
 
 
 %s
 
 
Para responder o ver el item original, haga click aqu&iacute;:
 
 %s
 
Para ver el perfil de %s, haga click aqu&iacute;:
 
 %s
 
Por favor no responda a este correo",
 
 /**
  * Entities
  */
	'byline' => 'Por %s',
	'entity:default:strapline' => 'Creado %s por %s',
	'entity:default:missingsupport:popup' => 'Esta entidad no puede mostrarse correctamente. Esto puede deberse a que el soporte provisto por un plugin ya no se encuentra instalado',
 
	'entity:delete:success' => 'La entidad %s ha sido eliminada',
	'entity:delete:fail' => 'La entidad %s no pudo ser eliminada',
 
 
 /**
  * Action gatekeeper
  */
	'actiongatekeeper:missingfields' => 'En el formulario faltan __token o campos __ts',
	'actiongatekeeper:tokeninvalid' => "La p&aacute;gina que se encontraba utilizando ha expirado. Por favor ingrese nuevamente",
	'actiongatekeeper:timeerror' => 'La p&aacute;gina que se encontraba utilizando ha expirado. Por favor ingrese nuevamente',
	'actiongatekeeper:pluginprevents' => 'Una extensi&oacute;n ha evitado que se env&iacute;e el formulario',
 	'actiongatekeeper:uploadexceeded' => 'El tama&ntilde;o del(os) archivo(s) supera el l&iacute;mite establecido',
	'actiongatekeeper:crosssitelogin' => "Lo sentimos, ingresar desde un dominio diferente no esta permitido. Por favor reintente.",

	
/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

 /**
  * Tag labels
  */
  
 	'tag_names:tags' => 'Palabras Clave',
	'tags:site_cloud' => 'Palabras Clave del Sitio',
 
 /**
  * Javascript
  */
  
	'js:security:token_refresh_failed' => 'No se pudo contactar a %s. Puede experimentar problemas al guardar contenidos en el sitio',
	'js:security:token_refreshed' => 'La conexi&oacute;n a %s ha sido restaurada!',
 
 /**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhaziano",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabe",
	"as" => "Assames",
	"ay" => "Aymara",
	"az" => "Azerbaijan&iacute;",
	"ba" => "Bashkir",
	"be" => "Bieloruso",
	"bg" => "B&uacute;lgaro",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengal&iacute; Bangla",
	"bo" => "Tibetano",
	"br" => "Bret&oacute;n",
	"ca" => "Catal&aacute;n",
	"co" => "Corso",
	"cs" => "Checo",
	"cy" => "Welsh",
	"da" => "Dan&eacute;s",
	"de" => "Alem&aacute;n",
	"dz" => "Bhutani",
	"el" => "Griego",
	"en" => "Ingl&eacute;s",
	"eo" => "Esperanto",
	"es" => "Espa&ntilde;ol",
	"et" => "Estoniano",
	"eu" => "Vasco",
	"fa" => "Persa",
	"fi" => "Finland&eacute;s",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "Franc&eacute;s",
	"fy" => "Frisio",
	"ga" => "Irland&eacute;s",
	"gd" => "Escoc&eacute;s / Gaelico",
	"gl" => "Gallego",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebreo",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croata",
	"hu" => "Hungaro",
	"hy" => "Armenio",
	"ia" => "Interlingua",
	"id" => "Indonesio",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
    //"in" => "Indonesian",
	"is" => "Island&eacute;s",
	"it" => "Italiano",
	"iu" => "Inuktitut",
	"iw" => "Hebreo (obsoleto)",
	"ja" => "Japon&eacute;s",
	"ji" => "Yiddish (obsoleto)",
	"jw" => "Javanese",
	"ka" => "Georgiano",
	"kk" => "Kazakh",
	"kl" => "Groenlandes",
	"km" => "Camboyano",
	"kn" => "Kannada",
	"ko" => "Koreano",
	"ks" => "Kashmir",
	"ku" => "Kurdo",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothio",
	"lt" => "Lituaniano",
	"lv" => "Latvio/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonio",
	"ml" => "Malayo",
	"mn" => "Mongoliano",
	"mo" => "Moldaviano",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltes",
	"my" => "Burmano",
	"na" => "Nauru",
	"ne" => "Nepal&eacute;s",
	"nl" => "Holand&eacute;s",
	"no" => "Noruego",
	"oc" => "Occitano",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polaco",
	"ps" => "Pashto / Pushto",
	"pt" => "Portugu&eacute;s",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Rumano",
	"ru" => "Ruso",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrito",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croata",
	"si" => "Singhales",
	"sk" => "Slovaco",
	"sl" => "Sloveno",
	"sm" => "Samoano",
	"sn" => "Shona",
	"so" => "Somal&iacute;",
	"sq" => "Albano",
	"sr" => "Serbio",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanes",
	"sv" => "Sueco",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmeno",
	"tl" => "Tagalogo",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turco",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ucraniano",
	"ur" => "Urdu",
	"uz" => "Uzbeko",
	"vi" => "Vietnam&eacute;s",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chino",
	"zu" => "Zulu",
 );
 
add_translation("es",$spanish);

<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/es/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Título de la web';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Por favor introduce el título de la web.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'Dirección e-mail del administrador del sistema';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Por favor introduce la dirección e-mail del administrador del sistema.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Formato de fecha';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Por favor introduce un formato de fecha válido para la función PHP function date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Formato de hora';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Por favor introduce un formato de hora válido para la función PHP function date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Formato de fecha y hora';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Por favor introduce un formato de fecha y hora válido para la función PHP function date()';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Zona horaria';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Por favor selecciona tu zona horaria.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Ruta relativa al directorio TYPOlight';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Por favor introduce la ruta relativa al directorio que contiene los archivos TYPOlight (por ejemplo si accedes al back de TYPOlight mediante <em>www.tudominio.com/tuweb/typolight</em> la ruta relativa sería <em>/tuweb</em>).';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Juegos caracteres';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Por favor introduce el juego de caracteres. El juego recomendado es UTF-8 para asegurar que los caracteres especiales aparezcan correctamente. No cambiar esta configuración a menos que experimente errores al mostrar algunos caracteres.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Diseño de secciones personalizado';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Aquí puedes introducir una lista de diseño de secciones (separada por comas). Después podrás utilizar estas secciones en el módulo <em>page layout</em> además de <em>header</em>, <em>left</em>, <em>main</em>, <em>right</em> y <em>footer</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Deshabilitar la programación de comandos';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Deshabilitar la programación de comandos periódicos y ejecutar el script cron.php utilizando una tarea cron real (se debe configurar manualmente).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Minificar el código';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Minificar el código HTML antes de ser enviado al navegador (requiere la extensión PHP tidy).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Comprimir scripts';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Crear una versión comprimida de la combinación de archivos CSS y JavaScript. Requiere ajustes al archivo .htaccess.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Registros por página';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Aquí puedes definir el número de registros mostrados en el back end por defecto.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Máximo de items por página';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Este límite total tiene efecto si un usuario selecciona la opción "mostrar todos los registros".';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'No desplegar elementos';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'No desplegar los elementos de contenido y otros recursos cuando se previsualicen en el back end.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'Sufijo URL';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'El sufijo de URL es una extensión que se añade al string URI para simular documentos estáticos. El sufijo URL por defecto es <em>.html</em>. No utilizar ningún sufijo URL puede tener un efecto negativo en el posicionamiento de buscadores.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Modalidad de cache';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Puede indicar la modalidad del cache.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anomizar dirección IP';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anomiza cualquier dirección IP que está almacenada en la base de datos, exepto la tabla <em>tl_session</em> (la dirección IP para la sesión está ligada a la sesión por razones de seguridad).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonimizar Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anomiza la dirección IP que se envia a Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Reescribir URL';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Con esta opción TYPOlight genera URLs estáticas sin "index.php" (por ejemplo <em>alias.html</em> en vez de <em>index.php/alias.html</em>). Esta opción requiere el módulo de Apache <em>mod_rewrite</em>!';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Añadir el idioma a la URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Añade el idisoma como primer parámetro URL (p.ej. <em>http://domain.tld/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'No redireccionar URLs vacías';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Para una URL vacia muerta la página en vez del redireccionameinte con el idioma de la página raíz (no recomendado).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Usar el parámetro auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Salta el fragmento <em>items/</em> or <em>events/</em> en la URL y descubre automáticamente el artículo basado en el parámetro <em>auto_item</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Deshabilitar el uso de alias de página';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Si seleccionas esta opción, TYPOlight utilizará la numeración ID de una página en vez de su alias para generar su URL (por ejemplo <em>12.html</em> en vez de <em>home.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Etiquetas HTML permitidas';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Por favor introduce una lista de extensiones (separados por coma) de las etiquetas HTMl permitidas. Todas las otras etiquetas serán eliminadas de las entradas del usuario.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Modo debug';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Si seleccionas esta opción, alguna información durante la ejecución (por ejemplo accesos a la base de datos) se mostrarán en la pantalla. Esta opción sólo se recomienda para modificaciones del sistema!';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Usar el modo seguro';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Usar Conteo en el modo seguro y cargar solamente los módulos del core';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Tiempo de espera en caso de una cuenta cerrada';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Por favor introduce el tiempo de espera en segundos que un usuario debe esperar antes de que se le permita volver a entrar en una cuenta cerrada (por defecto: 5 minutos = 300 segundos). Esta opción ayuda a que los ataques de fuerza bruta al sistema sean algo más difíciles.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Mostrar mensajes de error';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Si seleccionas esta opción, los mensajes de error apareceran en pantalla. Esta opción sólo se recomienda para modificaciones del sistema!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Mensajes de errores log';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Escribe mensajes al fichero error Log (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Deshabilitar referer check';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Selecciona esta opción si prefieres que TYPOlight no compruebe la dirección referer cuando se envía un formulario. Recuerda que deshabilitar esta opción es un gran riesgo de seguridad! Normalmente, cuestiones de tipo referer son causadas por seguridad o herramientas de anonimato.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Deshabilitar comprobación IP';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'No asociar sesiones a direcciones IP. ¡Marcar esta opción hace que el sistema sea menos seguro!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Tipos de archivo de descarga';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Por favor introduce una lista de extensiones (separados por coma) de los tipos de archivos permitidos para descargar. Por razones de seguridad, la descarga de archivos esta limitado a la carpeta files y sus subcarpetas.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Tipos de imágenes válidas';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Por favor introduce una lista de extensiones (separadas por coma) de imágenes aceptadas. No incluir aquellas que no puedan ser utilizadas por TYPOlight o tus propios scripts.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Tipos de archivos editables';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Por favor introduce una lista de extensiones (separados por coma) de archivos que sean editables en el editor fuente.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Tipos de archivo de plantilla';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Aquí puede ingresar una lista separada por comas de los tipos de archivo de plantilla soportados.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Ancho de imagen máximo en el front end';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Aquí puedes definir el ancho máximo de imágenes y archivos media. Si algún elemento supera este valor, será redimensionado automáticamente.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Calidad de la Miniatura';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Por favor escribe la calidad de la miniatura en porcentaje (se aplica a JPGs únicamente)';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Ancho de imagen máximo GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Aquí puede ingresar el ancho máximo de imagen que la biblioteca GD intentará procesar.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Altura de imagen máxima GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Aquí puede ingresar la altura máxima de imagen que la biblioteca GD intentará procesar.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Directorio de archivos';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Por favor introduce la ruta relativa al directorio de archivos (por defecto: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Tipos de archivos a transferir';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Por favor introduce una lista de extensiones (separados por coma) de los tipos de archivos permitidos a transferir (upload). Por razones de seguridad, la transferencia de archivos esta limitada a la carpeta file y sus subcarpetas.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Transferencias de archivos simultaneas';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Por favor introduce el máximo número de transferencias de archivos simultaneas.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Tamaño de archivo máximo a transferir';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Por favor introduce el tamaño de archivo máximo a transferir (upload) en bytes (por defecto: 2 MB = 2048 kB = 2048000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Ancho de imagen máximo';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Por favor introduce el ancho de imagen máximo en píxeles para archivos a transferir (uploads).';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Altura de imagen máxima';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Por favor introduce la altura de imagen máxima en píxeles para archivos a transferir (uploads).';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Habilitar búsquedas';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indexar páginas para que sean buscables.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indexar páginas protegidas';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Utiliza esta opción con cuidado y siempre excluye páginas personalizadas de ser indexadas.';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Utilizar SMTP para enviar e-mails';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Por defecto TYPOlight utiliza PHP <em>mail()</em> para enviar e-mails. Aquí puedes cambiar a un servidor SMTP.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'Servidor SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Por favor introduce el nombre del servidor SMTP (por defecto localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'Usuario SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Si tu servidor SMTP requiere autenticación, por favor introduce un nombre de usuario aquí.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'Contraseña SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Si tu servidor SMTP requiere autenticación, por favor introduce una contraseña aquí.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'Cifrado SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Aquí puedes seleccionar un método (SSL o TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'Puerto SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Por favor introduce el número de puesto de tu servidor SMTP server (por defecto 25 o 465 para SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Módulos back end inactivos';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Aquí puedes desactivar aquellos módulos de back end innecesarios.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Duración de pasos de deshacer en el sistema';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Por favor introduce el tiempo en segundos durante el que permanecerán guardados los pasos de deshacer de acciones realizadas (por defecto: 24 horas = 86400 segundos).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Duración de versiones en el sistema';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Por favor introduce el tiempo en segundos durante el que permanecerán almacenados en el sistema las diferentes versiones de un registro (por defecto: 90 días = 7776000 segundos).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Duración de entradas log en el sistema';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Por favor introduce el tiempo en segundos durante el que permanecerán almacenados en el sistema las entradas log (por defecto: 14 días = 1209600 segundos).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Caducidad sesión';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Por favor introduce en segundos la duración máxima de una sesión (por defecto: 60 minutos = 3600 segundos). Si no hay ninguna entrada del usuario por un tiempo superior al establecido, la sesión actual será eliminada y el usuario deberá identificarse de nuevo.';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Tiempo de inicio de sesión automático';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Aquí puedes establecer el tiempo que será válido el inicio de sesión automático (90 dias = 7776000 segundos).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Usuario de página por defecto';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Por defecto, una página pertenece al mismo usuario que la página madre. Sin embargo, si no hay usuario asignado, el usuario por defecto será el propietario de la página. Si no hay usuario ni usuario por defecto, no habrá ningún tipo de restricciones de acceso!';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Grupo de página por defecto';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Por defecto, una página pertenece al mismo grupo que la página madre. Sin embargo, si no hay grupo asignado, el grupo por defecto será el propietario de la página. Si no hay grupo ni grupo por defecto, no habrá ningún tipo de restricciones de acceso!';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Permisos de página por defecto';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Por defecto, una página tiene los mismos permisos que su página madre. Sin embargo, si no se han definido permisos, se aplicaran estos permisos.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'URL de Live Update';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Aquí puedes introducir la dirección URL de Live Update';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Título de la web';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Fecha y hora';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Configuración global';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Configuración del back end';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Configuración del front end';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Configuración de privacidad';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Ajustes de seguridad';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Archivos y imágenes';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Ajustes de upload';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Ajustes de motor de búsqueda';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Configuración SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Extensiones inactivas';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Valores de tiemout';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Privilegios de acceso por defecto';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Actualización automática';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Recursos estáticos';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Editar la configuración local';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Utilizar el cache del servidor y del navegador';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Utilizar sólo el cache del servidor';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Utilizar sólo el cache del navegador';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Deshabilitar el cache';

<?php
// Version: 2.0; Login

global $context;

// Registration agreement page.
$txt['registration_agreement'] = 'Acuerdo de registro';
$txt['agreement_agree'] = 'Acepto este acuerdo.';
$txt['agreement_agree_coppa_above'] = 'Acepto este acuerdo y tengo al menos %1$d años.';
$txt['agreement_agree_coppa_below'] = 'Acepto este acuerdo y tengo menos de %1$d años.';

// Registration form.
$txt['registration_form'] = 'Formulario de registro';
$txt['need_username'] = 'Tienes que poner un nombre.';
$txt['no_password'] = 'No pusiste una contraseña.';
$txt['incorrect_password'] = 'Contraseña incorrecta';
$txt['choose_username'] = 'Elige un nombre';
$txt['maintain_mode'] = 'Modo de mantenimiento';
$txt['registration_successful'] = 'Registro correcto';
$txt['now_a_member'] = '¡Bien! Ya eres usuario de este foro.';
// Use numeric entities in the below string.
$txt['your_password'] = 'y tu clave es';
$txt['valid_email_needed'] = 'Pon un correo correcto, %1$s.';
$txt['required_info'] = 'Información necesaria';
$txt['identification_by_smf'] = 'Usado para identificarte en el foro.';
$txt['additional_information'] = 'Información adicional';
$txt['warning'] = '¡Atención!';
$txt['only_members_can_access'] = 'Solo los usuarios registrados pueden acceder a esta sección.';
$txt['login_below'] = 'Por favor, inicia sesión o';
$txt['register_an_account'] = 'registra una cuenta';
$txt['login_with_forum'] = 'en %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Puedes cambiarla tras iniciar sesión yendo a tu perfil, o visitando esta página:';
$txt['your_username_is'] = 'Tu nombre es: ';

$txt['login_hash_error'] = 'Se ha actualizado el sistema de contraseñas hace poco. Por favor, introduce tu clave de nuevo.';

$txt['ban_register_prohibited'] = 'Lo siento, no puedes registrarte en este foro.';
$txt['under_age_registration_prohibited'] = 'Lo siento, pero si tienes menos de %1$d no puedes registrarte en este foro.';

$txt['activate_account'] = 'Activación de la cuenta';
$txt['activate_success'] = 'Tu cuenta ha sido activada. Ya puedes iniciar sesión.';
$txt['activate_not_completed1'] = 'Tienes que validar tu correo antes de poder iniciar sesión.';
$txt['activate_not_completed2'] = '¿Necesitas otro correo de confirmación?';
$txt['activate_after_registration'] = 'Gracias por registrarte. Recibirás un correo pronto con un enlace para activar tu cuenta. Si no lo recibes, mira en tu carpeta de spam.';
$txt['invalid_userid'] = 'El usuario no existe';
$txt['invalid_activation_code'] = 'El código de activación no era válido';
$txt['invalid_activation_username'] = 'Usuario o correo';
$txt['invalid_activation_new'] = 'Si te equivocaste al poner el correo, pon uno nuevo y tu clave aquí.';
$txt['invalid_activation_new_email'] = 'Nuevo correo';
$txt['invalid_activation_password'] = 'Antigua contraseña';
$txt['invalid_activation_resend'] = 'Volver a enviar el código de activación';
$txt['invalid_activation_known'] = 'Si ya tienes tu código de activación, ponlo aquí.';
$txt['invalid_activation_retry'] = 'Código de activación';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_no_concent'] = 'El administrador todavía no ha recibido el consentimiento de tus padres o tutores.';
$txt['coppa_need_more_details'] = '¿Necesitas más información?';

$txt['awaiting_delete_account'] = 'Tu cuenta ha sido marcada para ser eliminada.<br />Si quieres restaurar tu cuenta, marca la casilla &quot;Reactivar mi cuenta&quot; y vuelve a iniciar sesión.';
$txt['undelete_account'] = 'Reactivar mi cuenta';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles de la nueva contraseña';
$txt['change_password_login'] = 'Se han cambiado tu información de inicio de sesión en';
$txt['change_password_new'] = 'y tu clave se ha restaurado. Aquí está tu nueva información de inicio de sesión.';

$txt['in_maintain_mode'] = 'Este foro está en modo mantenimiento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Tienes que leer y aceptar el acuerdo antes de registrarte.';
$txt['register_passwords_differ_js'] = 'Las dos contraseñas que has introducido no son la misma.';

$txt['approval_after_registration'] = 'Gracias por registrarte. Un administrador debe aceptar tu registro antes de que puedas usar tu cuenta, recibirás un correo en breve informándote de la decisión de la administración.';

$txt['admin_settings_desc'] = 'Aquí puedes cambiar varias opciones relacionadas al registro de nuevos miembros.';

$txt['setting_enableOpenID'] = 'Permitir que los usuarios se registren usando OpenID';

$txt['setting_registration_method'] = 'Método de registro usado para nuevos usuarios';
$txt['setting_registration_disabled'] = 'Registro desactivado';
$txt['setting_registration_standard'] = 'Registro inmediato';
$txt['setting_registration_activate'] = 'Activación por correo';
$txt['setting_registration_approval'] = 'Aceptación por el administrador';
$txt['setting_notify_new_registration'] = 'Notificar a los administradores cuando se registre un nuevo usuario';
$txt['setting_send_welcomeEmail'] = 'Enviar un correo de bienvenida a todos los usuarios nuevos';

$txt['setting_coppaAge'] = 'Edad bajo la cual se aplican las restricciones de registro';
$txt['setting_coppaAge_desc'] = '(Poner a 0 para desactivar)';
$txt['setting_coppaType'] = 'Acción a tomar cuando un usuario cuya edad sea inferior a la mínima se registre';
$txt['setting_coppaType_reject'] = 'Rechazar su registro';
$txt['setting_coppaType_approval'] = 'Exigir permiso de sus padres/tutores';
$txt['setting_coppaPost'] = 'Dirección postal a la cual debe enviarse el formulario de permiso';
$txt['setting_coppaPost_desc'] = 'Solo se aplica si hay restricción por edad';
$txt['setting_coppaFax'] = 'Número de fax al cual debe enviarse el formulario de permiso';
$txt['setting_coppaPhone'] = 'Número de contacto para padres con preguntas en torno a las restricciones de edad';

$txt['admin_register'] = 'Registrar un nuevo usuario';
$txt['admin_register_desc'] = 'Aquí puedes registrar nuevos usuarios en tu foro y, si quieres, enviarles por correo su información de registro.';
$txt['admin_register_username'] = 'Nuevo usuario';
$txt['admin_register_email'] = 'Correo';
$txt['admin_register_password'] = 'Contraseña';
$txt['admin_register_username_desc'] = 'Nombre del usuario';
$txt['admin_register_email_desc'] = 'Correo del usuario';
$txt['admin_register_password_desc'] = 'Contraseña del usuario';
$txt['admin_register_email_detail'] = 'Enviar por correo la nueva contraseña al usuario';
$txt['admin_register_email_detail_desc'] = 'Es necesario un correo aun no marcando esto';
$txt['admin_register_email_activate'] = 'Requerir que el usuario active su cuenta';
$txt['admin_register_group'] = 'Grupo principal';
$txt['admin_register_group_desc'] = 'Grupo principal al que el usuario pertenecerá';
$txt['admin_register_group_none'] = '(sin grupo principal)';
$txt['admin_register_done'] = 'El usuario %1$s ha sido registrado.';

$txt['coppa_title'] = 'Foro con restricción por edad';
$txt['coppa_after_registration'] = 'Gracias por registrarte en ' . $context['forum_name_html_safe'] . '.<br /><br />Como tienes menos de {MINIMUM_AGE} años, es necesario que tengamos la aprobación de tus padres o tutores antes de poder activarte la cuenta. Para poder hacer esto, imprime este formulario:';
$txt['coppa_form_link_popup'] = 'Cargar el formulario en una nueva ventana';
$txt['coppa_form_link_download'] = 'Descargar el formulario como archivo de texto';
$txt['coppa_send_to_one_option'] = 'Tus padres o tutores tendrán que enviar el formulario relleno.';
$txt['coppa_send_to_two_options'] = 'Tus padres o tutores podrán enviar el formulario relleno de varias maneras.';
$txt['coppa_send_by_post'] = 'Correo postal, a:';
$txt['coppa_send_by_fax'] = 'Fax, a este número:';
$txt['coppa_send_by_phone'] = 'Llamando por teléfono a {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formulario de permiso para el registro en ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Dirección';
$txt['coppa_form_date'] = 'Fecha';
$txt['coppa_form_body'] = 'Yo, {PARENT_NAME},<br /><br />Doy permiso a mi hijo {CHILD_NAME} (nombre del hijo) para registrarse en el foro: ' . $context['forum_name_html_safe'] . ', con el nombre de usuario: {USER_NAME}.<br /><br />Entiendo que cierta información introducida por {USER_NAME} podría ser mostrada a otros usuarios del foro.<br /><br />Firmado:<br />{PARENT_NAME} (Padre/tutor).';

$txt['visual_verification_sound_again'] = 'Volver a escuchar';
$txt['visual_verification_sound_close'] = 'Cerrar ventana';
$txt['visual_verification_sound_direct'] = '¿No puedes oírlo? Prueba con un enlace directo.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'El nombre de usuario está disponible';
$txt['registration_username_unavailable'] = 'El nombre de usuario no está disponible';
$txt['registration_username_check'] = 'Comprueba si el nombre de usuario está disponible';
$txt['registration_password_short'] = 'La contraseña es muy corta';
$txt['registration_password_reserved'] = 'La contraseña contiene tu nombre o correo';
$txt['registration_password_numbercase'] = 'La contraseña debe contener tanto letras en mayúsculas y minúsculas como números';
$txt['registration_password_no_match'] = 'Las contraseñas no coinciden';
$txt['registration_password_valid'] = 'La contraseña es válida';

$txt['registration_errors_occurred'] = 'Hay fallos en tu registro. Corrígelos para poder continuar:';

$txt['authenticate_label'] = 'Método de autenticación';
$txt['authenticate_password'] = 'Contraseña';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL de autenticación OpenID';

?>
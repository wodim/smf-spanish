<?php
// Version: 2.0; PersonalMessage

global $context;

$txt['pm_inbox'] = '�ndice de mensajes privados';
$txt['send_message'] = 'Enviar mensaje';
$txt['pm_add'] = 'A�adir';
$txt['make_bcc'] = 'A�adir CCO';
$txt['pm_to'] = 'A';
$txt['pm_bcc'] = 'CCO';
$txt['inbox'] = 'Bandeja de entrada';
$txt['conversation'] = 'Conversaci�n';
$txt['messages'] = 'Mensajes';
$txt['sent_items'] = 'Bandeja de salida';
$txt['new_message'] = 'Nuevo mensaje';
$txt['delete_message'] = 'Eliminar mensajes';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Eliminar todos los mensajes de tu PMBOX';
$txt['delete_all_confirm'] = '�Seguro que quieres eliminar todos los mensajes?';
$txt['recipient'] = 'Destinatario';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nuevo mensaje privado: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'SENDER te acaba de enviar un mensaje privado en ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Recuerda, esto no es m�s que una notificaci�n. No contestes a este correo.' . "\n\n" . 'El mensaje que te enviaron fue:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(varios destinatarios: \'nombre1, nombre2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Responde a este privado aqu�:';

$txt['delete_selected_confirm'] = '�Seguro que quieres eliminar todos los privados seleccionados?';

$txt['sent_to'] = 'Enviado a';
$txt['reply_to_all'] = 'Responder a todos';
$txt['delete_conversation'] = 'Eliminar conversaci�n';

$txt['pm_capacity'] = 'Capacidad';
$txt['pm_currently_using'] = '%1$s mensajes, lleno el %2$s%%.';
$txt['pm_sent'] = 'Mensaje enviado.';

$txt['pm_error_user_not_found'] = 'El usuario \'%1$s\' no existe.';
$txt['pm_error_ignored_by_user'] = 'El usuario \'%1$s\' no quiere recibir mensajes tuyos.';
$txt['pm_error_data_limit_reached'] = 'La bandeja de entrada de \'%1$s\' est� llena, el mensaje no se envi�.';
$txt['pm_error_user_cannot_read'] = 'El usuario \'%1$s\' no puede recibir privados.';
$txt['pm_successfully_sent'] = 'Mensaje enviado a \'%1$s\'.';
$txt['pm_send_report'] = 'Enviar reporte';
$txt['pm_save_outbox'] = 'Guardar una copia en mi bandeja de salida';
$txt['pm_undisclosed_recipients'] = 'Destinatarios ocultos';
$txt['pm_too_many_recipients'] = 'No puedes enviar privados a m�s de %1$d usuario(s) a la vez.';

$txt['pm_read'] = 'Le�do';
$txt['pm_replied'] = 'Contestado';

// Message Pruning.
$txt['pm_prune'] = 'Limpiar mensajes';
$txt['pm_prune_desc1'] = 'Eliminar todos los mensajes que tengan m�s de';
$txt['pm_prune_desc2'] = 'd�as.';
$txt['pm_prune_warning'] = '�Est�s seguro de querer limpiar tus mensajes?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'M�s acciones';
$txt['pm_actions_delete_selected'] = 'Eliminar seleccionados';
$txt['pm_actions_filter_by_label'] = 'Filtrar por etiqueta';
$txt['pm_actions_go'] = 'Ir';

// Manage Labels Screen.
$txt['pm_apply'] = 'Aplicar';
$txt['pm_manage_labels'] = 'Administrar etiquetas';
$txt['pm_labels_delete'] = '�Estas seguro de querer eliminar las etiquetas seleccionadas?';
$txt['pm_labels_desc'] = 'Desde aqu� puedes a�adir, editar y eliminar las etiquetas usadas en tu centro de mensajes privados.';
$txt['pm_label_add_new'] = 'A�adir nueva etiqueta';
$txt['pm_label_name'] = 'Nombre de la etiqueta';
$txt['pm_labels_no_exist'] = 'No tienes etiquetas.';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiquetar';
$txt['pm_msg_label_title'] = 'Etiquetar mensaje';
$txt['pm_msg_label_apply'] = 'A�adir etiqueta';
$txt['pm_msg_label_remove'] = 'Quitar etiqueta';
$txt['pm_msg_label_inbox'] = 'Bandeja de entrada';
$txt['pm_sel_label_title'] = 'Etiquetar los seleccionados';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiquetas';
$txt['pm_messages'] = 'Mensajes';
$txt['pm_actions'] = 'Acciones';
$txt['pm_preferences'] = 'Preferencias';

$txt['pm_is_replied_to'] = 'Ya has reenviado o contestado a este mensaje.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Reportar';
$txt['pm_report_title'] = 'Reportar mensaje privado';
$txt['pm_report_desc'] = 'Desde esta p�gina puedes reportar el mensaje que has recibido a los administradores. Incluye una descripci�n de por qu� has reportado el mensaje, la cual ser� enviada junto al contenido del mensaje.';
$txt['pm_report_admins'] = 'Administrador al que enviar';
$txt['pm_report_all_admins'] = 'Enviar a todos';
$txt['pm_report_reason'] = 'Raz�n por la que reportas esto';
$txt['pm_report_message'] = 'Reportar';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORTE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ha reportado el mensaje siguiente, enviado por {SENDER}, por la siguiente raz�n:';
$txt['pm_report_pm_other_recipients'] = 'Otros receptores del mensaje:';
$txt['pm_report_pm_hidden'] = '%1$d receptores oculto(s)';
$txt['pm_report_pm_unedited_below'] = 'Este es el contenido del mensaje que fue enviado:';
$txt['pm_report_pm_sent'] = 'Enviado:';

$txt['pm_report_done'] = 'Gracias por enviar el reporte. Los administradores se pondr�n en contacto contigo pronto.';
$txt['pm_report_return'] = 'Volver a la bandeja de entrada';

$txt['pm_search_title'] = 'Buscar mensajes personales';
$txt['pm_search_bar_title'] = 'Buscar mensajes';
$txt['pm_search_text'] = 'Buscar';
$txt['pm_search_go'] = 'Buscar';
$txt['pm_search_advanced'] = 'B�squeda avanzada';
$txt['pm_search_user'] = 'Por usuario';
$txt['pm_search_match_all'] = 'Buscar todas las palabras';
$txt['pm_search_match_any'] = 'Buscar cualquier palabra';
$txt['pm_search_options'] = 'Opciones';
$txt['pm_search_post_age'] = 'Antig�edad del mensaje';
$txt['pm_search_show_complete'] = 'Mostrar mensaje completo en los resultados.';
$txt['pm_search_subject_only'] = 'Buscar por t�tulo y autor solamente.';
$txt['pm_search_between'] = 'entre';
$txt['pm_search_between_and'] = 'y';
$txt['pm_search_between_days'] = 'd�as';
$txt['pm_search_order'] = 'Orden de b�squeda';
$txt['pm_search_choose_label'] = 'Elige las etiquetas que buscar�s, o buscar en todas';

$txt['pm_search_results'] = 'Resultados de b�squeda';
$txt['pm_search_none_found'] = 'No se han encontrado mensajes';

$txt['pm_search_orderby_relevant_first'] = 'Los m�s relevantes primero';
$txt['pm_search_orderby_recent_first'] = 'Los m�s recientes primero';
$txt['pm_search_orderby_old_first'] = 'Los m�s antiguos primero';

$txt['pm_visual_verification_label'] = 'Verificaci�n';
$txt['pm_visual_verification_desc'] = 'Introduce el c�digo de la imagen para poder enviar este privado.';

$txt['pm_settings'] = 'Cambiar configuraci�n';
$txt['pm_change_view'] = 'Cambiar vista';

$txt['pm_manage_rules'] = 'Administrar reglas';
$txt['pm_manage_rules_desc'] = 'Las reglas de mensajes te permiten ordenar los mensajes entrantes autom�ticamente seg�n los criterios que elijas. Abajo tienes las reglas que ya has configurado. Para editar una regla, haz clic en ella.';
$txt['pm_rules_none'] = 'De momento no has configurado ninguna regla.';
$txt['pm_rule_title'] = 'Regla';
$txt['pm_add_rule'] = 'A�adir nueva regla';
$txt['pm_apply_rules'] = 'Aplicar reglas';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = '�Est�s seguro de querer aplicar estas reglas a tus mensajes?';
$txt['pm_edit_rule'] = 'Editar reglas';
$txt['pm_rule_save'] = 'Guardar regla';
$txt['pm_delete_selected_rule'] = 'Eliminar las reglas seleccionadas';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = '�Est�s seguro de querer eliminar las reglas seleccionadas?';
$txt['pm_rule_name'] = 'Nombre';
$txt['pm_rule_name_desc'] = 'Nombre por el que identificar esta regla';
$txt['pm_rule_name_default'] = '[NOMBRE]';
$txt['pm_rule_description'] = 'Descripci�n';
$txt['pm_rule_not_defined'] = 'A�ade alg�n criterio para ir creando la descripci�n de esta regla.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Nota:</strong> parece que tienes JavaScript desactivado. Te recomendamos activarlo para una mejor edici�n de las reglas.</span>';
$txt['pm_rule_criteria'] = 'Criterio';
$txt['pm_rule_criteria_add'] = 'A�adir criterio';
$txt['pm_rule_criteria_pick'] = 'Elegir criterio';
$txt['pm_rule_mid'] = 'Nombre del que lo env�a';
$txt['pm_rule_gid'] = 'Grupo del que lo env�a';
$txt['pm_rule_sub'] = 'El t�tulo contiene';
$txt['pm_rule_msg'] = 'El mensaje contiene';
$txt['pm_rule_bud'] = 'El que lo env�a es amigo';
$txt['pm_rule_sel_group'] = 'Seleccionar grupo';
$txt['pm_rule_logic'] = 'Al comprobar los criterios';
$txt['pm_rule_logic_and'] = 'Todos los criterios deben coincidir';
$txt['pm_rule_logic_or'] = 'Cualquier criterio puede coincidir';
$txt['pm_rule_actions'] = 'Acciones';
$txt['pm_rule_sel_action'] = 'Seleccionar una acci�n';
$txt['pm_rule_add_action'] = 'A�adir acci�n';
$txt['pm_rule_label'] = 'Etiquetar el mensaje con';
$txt['pm_rule_sel_label'] = 'Seleccionar etiqueta';
$txt['pm_rule_delete'] = 'Eliminar mensaje';
$txt['pm_rule_no_name'] = 'Se te ha olvidado introducir un nombre para la regla.';
$txt['pm_rule_no_criteria'] = 'Una regla debe tener como m�nimo un criterio y una acci�n.';
$txt['pm_rule_too_complex'] = 'La regla que est�s creando es demasiado compleja. Intenta dividirla en reglas m�s peque�as.';

$txt['pm_readable_and'] = '<em>y</em>';
$txt['pm_readable_or'] = '<em>o</em>';
$txt['pm_readable_start'] = 'Si ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'el mensaje es de &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'el que lo envi� pertenece al grupo &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'el t�tulo del mensaje contiene &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'el mensaje en s� contiene &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'el que lo env�a es un amigo';
$txt['pm_readable_label'] = 'se aplicar� la etiqueta &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'se eliminar�';
$txt['pm_readable_then'] = '<strong>entonces</strong>';

?>